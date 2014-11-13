<?php

/**
 * This is the model class for table "{{obiekt}}".
 *
 * The followings are the available columns in table '{{obiekt}}':
 * @property integer $id
 * @property integer $warstwa_id
 * @property string $nazwa
 * @property integer $ilosc_punktow
 * @property string $data_aktualizacji
 * @property integer $czy_wyswietlic
 *
 * The followings are the available model relations:
 * @property Warstwa $warstwa
 * @property Punkt[] $punkts
 */
class Obiekt extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{obiekt}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('warstwa_id, nazwa', 'required'),
			array('warstwa_id, ilosc_punktow, czy_wyswietlic', 'numerical', 'integerOnly'=>true),
			array('nazwa, data_aktualizacji', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, warstwa_id, nazwa, ilosc_punktow, data_aktualizacji, czy_wyswietlic', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'warstwa' => array(self::BELONGS_TO, 'Warstwa', 'warstwa_id'),
			'punkts' => array(self::HAS_MANY, 'Punkt', 'obiekt_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'warstwa_id' => 'Warstwa',
			'nazwa' => 'Nazwa',
			'ilosc_punktow' => 'Ilosc Punktow',
			'data_aktualizacji' => 'Data Aktualizacji',
			'czy_wyswietlic' => 'Czy Wyswietlic',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('warstwa_id',$this->warstwa_id);
		$criteria->compare('nazwa',$this->nazwa,true);
		$criteria->compare('ilosc_punktow',$this->ilosc_punktow);
		$criteria->compare('data_aktualizacji',$this->data_aktualizacji,true);
		$criteria->compare('czy_wyswietlic',$this->czy_wyswietlic);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Obiekt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

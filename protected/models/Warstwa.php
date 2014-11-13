<?php

/**
 * This is the model class for table "{{warstwa}}".
 *
 * The followings are the available columns in table '{{warstwa}}':
 * @property integer $id
 * @property string $nazwa
 * @property string $typ_obiektow
 * @property integer $ilosc_obiektow
 * @property integer $czy_wyswietlic
 * @property string $data_aktualizacji
 * @property integer $user_id
 * @property integer $z_index
 *
 * The followings are the available model relations:
 * @property Obiekt[] $obiekts
 * @property User $user
 */
class Warstwa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{warstwa}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nazwa, typ_obiektow, user_id', 'required'),
			array('ilosc_obiektow, czy_wyswietlic, user_id, z_index', 'numerical', 'integerOnly'=>true),
			array('nazwa, typ_obiektow, data_aktualizacji', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nazwa, typ_obiektow, ilosc_obiektow, czy_wyswietlic, data_aktualizacji, user_id, z_index', 'safe', 'on'=>'search'),
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
			'obiekts' => array(self::HAS_MANY, 'Obiekt', 'warstwa_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nazwa' => 'Nazwa',
			'typ_obiektow' => 'Typ Obiektow',
			'ilosc_obiektow' => 'Ilosc Obiektow',
			'czy_wyswietlic' => 'Czy Wyswietlic',
			'data_aktualizacji' => 'Data Aktualizacji',
			'user_id' => 'User',
			'z_index' => 'Z Index',
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
		$criteria->compare('nazwa',$this->nazwa,true);
		$criteria->compare('typ_obiektow',$this->typ_obiektow,true);
		$criteria->compare('ilosc_obiektow',$this->ilosc_obiektow);
		$criteria->compare('czy_wyswietlic',$this->czy_wyswietlic);
		$criteria->compare('data_aktualizacji',$this->data_aktualizacji,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('z_index',$this->z_index);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Warstwa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

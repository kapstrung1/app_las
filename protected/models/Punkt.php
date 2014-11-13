<?php

/**
 * This is the model class for table "{{punkt}}".
 *
 * The followings are the available columns in table '{{punkt}}':
 * @property integer $id
 * @property double $latitude
 * @property double $longitude
 * @property integer $obiekt_id
 * @property string $data_aktualizacji
 * @property integer $kolejnosc
 *
 * The followings are the available model relations:
 * @property Obiekt $obiekt
 */
class Punkt extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{punkt}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('latitude, longitude, obiekt_id, kolejnosc', 'required'),
			array('obiekt_id, kolejnosc', 'numerical', 'integerOnly'=>true),
			array('latitude, longitude', 'numerical'),
			array('data_aktualizacji', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, latitude, longitude, obiekt_id, data_aktualizacji, kolejnosc', 'safe', 'on'=>'search'),
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
			'obiekt' => array(self::BELONGS_TO, 'Obiekt', 'obiekt_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'obiekt_id' => 'Obiekt',
			'data_aktualizacji' => 'Data Aktualizacji',
			'kolejnosc' => 'Kolejnosc',
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
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('obiekt_id',$this->obiekt_id);
		$criteria->compare('data_aktualizacji',$this->data_aktualizacji,true);
		$criteria->compare('kolejnosc',$this->kolejnosc);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Punkt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

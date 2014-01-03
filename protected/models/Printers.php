<?php

/**
 * This is the model class for table "tbl_printers".
 *
 * The followings are the available columns in table 'tbl_printers':
 * @property integer $id
 * @property string $location
 * @property string $printer_type
 * @property double $lat
 * @property double $lng
 * @property string $printer_status
 * @property string $printer_active
 * @property string $comment
 * @property string $ip
 */
class Printers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Printers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_printers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location, printer_type, lat, lng', 'required'),
			array('lat, lng', 'numerical'),
			array('printer_type, printer_status', 'length', 'max'=>80),
			array('printer_active', 'length', 'max'=>1),
			array('ip', 'length', 'max'=>30),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, location, printer_type, lat, lng, printer_status, printer_active, comment, ip', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'location' => 'Location',
			'printer_type' => 'Printer Type',
			'lat' => 'Lat',
			'lng' => 'Lng',
			'printer_status' => 'Printer Status',
			'printer_active' => 'Printer Active',
			'comment' => 'Comment',
			'ip' => 'Ip',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('printer_type',$this->printer_type,true);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);
		$criteria->compare('printer_status',$this->printer_status,true);
		$criteria->compare('printer_active',$this->printer_active,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('ip',$this->ip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
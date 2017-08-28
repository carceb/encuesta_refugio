<?php

/**
 * This is the model class for table "situacion_vivienda".
 *
 * The followings are the available columns in table 'situacion_vivienda':
 * @property integer $id_situacion_vivienda
 * @property string $nombre_situacion_vivienda
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 */
class SituacionVivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return SituacionVivienda the static model class
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
		return 'situacion_vivienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_situacion_vivienda', 'required'),
			array('nombre_situacion_vivienda', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_situacion_vivienda, nombre_situacion_vivienda', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_situacion_vivienda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_situacion_vivienda' => 'Id Situacion Vivienda',
			'nombre_situacion_vivienda' => 'Nombre Situacion Vivienda',
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

		$criteria->compare('id_situacion_vivienda',$this->id_situacion_vivienda);
		$criteria->compare('nombre_situacion_vivienda',$this->nombre_situacion_vivienda,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
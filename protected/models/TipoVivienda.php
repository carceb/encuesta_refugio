<?php

/**
 * This is the model class for table "tipo_vivienda".
 *
 * The followings are the available columns in table 'tipo_vivienda':
 * @property integer $id_tipo_vivienda
 * @property string $nombre_tipo_vivienda
 *
 * The followings are the available model relations:
 */
class TipoVivienda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoVivienda the static model class
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
		return 'tipo_vivienda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_vivienda', 'required'),
			array('nombre_tipo_vivienda', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tipo_vivienda, nombre_tipo_vivienda', 'safe', 'on'=>'search'),
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
			'id_tipo_vivienda' => 'Id Tipo Vivienda',
			'nombre_tipo_vivienda' => 'Nombre Tipo Vivienda',
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

		$criteria->compare('id_tipo_vivienda',$this->id_tipo_vivienda);
		$criteria->compare('nombre_tipo_vivienda',$this->nombre_tipo_vivienda,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
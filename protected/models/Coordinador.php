<?php

/**
 * This is the model class for table "coordinador".
 *
 * The followings are the available columns in table 'coordinador':
 * @property integer $id_coordinador
 * @property integer $cedula_coordinador
 * @property string $nombre_coordinador
 * @property string $tlf_coordinador
 * @property string $correo
 * @property integer $id_refugio
 * @property integer $id_tipo_coordinador
 *
 * The followings are the available model relations:
 * @property Refugio $idRefugio0
 * @property TipoCoordinador $idTipoCoordinador0
 */
class Coordinador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Coordinador the static model class
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
		return 'coordinador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_coordinador, nombre_coordinador, id_refugio, id_tipo_coordinador', 'required'),
			array('cedula_coordinador, id_refugio, id_tipo_coordinador', 'numerical', 'integerOnly'=>true),
			array('nombre_coordinador, tlf_coordinador', 'length', 'max'=>256),
			array('correo', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_coordinador, cedula_coordinador, nombre_coordinador, tlf_coordinador, correo, id_refugio, id_tipo_coordinador', 'safe', 'on'=>'search'),
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
			'idRefugio0' => array(self::BELONGS_TO, 'Refugio', 'id_refugio'),
			'idTipoCoordinador0' => array(self::BELONGS_TO, 'TipoCoordinador', 'id_tipo_coordinador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_coordinador' => 'Id Coordinador',
			'cedula_coordinador' => 'Cedula Coordinador',
			'nombre_coordinador' => 'Nombre Coordinador',
			'tlf_coordinador' => 'Tlf Coordinador',
			'correo' => 'Correo',
			'id_refugio' => 'Id Refugio',
			'id_tipo_coordinador' => 'Id Tipo Coordinador',
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

		$criteria->compare('id_coordinador',$this->id_coordinador);
		$criteria->compare('cedula_coordinador',$this->cedula_coordinador);
		$criteria->compare('nombre_coordinador',$this->nombre_coordinador,true);
		$criteria->compare('tlf_coordinador',$this->tlf_coordinador,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('id_refugio',$this->id_refugio);
		$criteria->compare('id_tipo_coordinador',$this->id_tipo_coordinador);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
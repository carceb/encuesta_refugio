<?php

/**
 * This is the model class for table "tipo_coordinador".
 *
 * The followings are the available columns in table 'tipo_coordinador':
 * @property integer $id_tipo_coordinador
 * @property string $nombre_tipo_coordinador
 *
 * The followings are the available model relations:
 * @property Coordinador[] $coordinadors
 */
class TipoCoordinador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TipoCoordinador the static model class
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
		return 'tipo_coordinador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_coordinador', 'required'),
			array('nombre_tipo_coordinador', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tipo_coordinador, nombre_tipo_coordinador', 'safe', 'on'=>'search'),
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
			'coordinadors' => array(self::HAS_MANY, 'Coordinador', 'id_tipo_coordinador'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_coordinador' => 'Id Tipo Coordinador',
			'nombre_tipo_coordinador' => 'Nombre Tipo Coordinador',
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

		$criteria->compare('id_tipo_coordinador',$this->id_tipo_coordinador);
		$criteria->compare('nombre_tipo_coordinador',$this->nombre_tipo_coordinador,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
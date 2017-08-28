<?php

/**
 * This is the model class for table "estatus_trabajo".
 *
 * The followings are the available columns in table 'estatus_trabajo':
 * @property integer $id_estatus_trabajo
 * @property string $nombre_estatus_trabajo
 *
 * The followings are the available model relations:
 */
class EstatusTrabajo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EstatusTrabajo the static model class
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
		return 'estatus_trabajo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_estatus_trabajo', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estatus_trabajo, nombre_estatus_trabajo', 'safe', 'on'=>'search'),
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
			'id_estatus_trabajo' => 'Id Estatus Trabajo',
			'nombre_estatus_trabajo' => 'Nombre Estatus Trabajo',
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

		$criteria->compare('id_estatus_trabajo',$this->id_estatus_trabajo);
		$criteria->compare('nombre_estatus_trabajo',$this->nombre_estatus_trabajo,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
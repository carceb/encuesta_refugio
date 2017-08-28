<?php

/**
 * This is the model class for table "nivel_instruccion".
 *
 * The followings are the available columns in table 'nivel_instruccion':
 * @property integer $id_nivel_instruccion
 * @property string $nombre_nivel_instruccion
 *
 * The followings are the available model relations:
 * @property GrupoFamiliar[] $grupoFamiliars
 */
class NivelInstruccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return NivelInstruccion the static model class
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
		return 'nivel_instruccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_nivel_instruccion', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_nivel_instruccion, nombre_nivel_instruccion', 'safe', 'on'=>'search'),
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
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'id_nivel_instruccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_nivel_instruccion' => 'Id Nivel Instruccion',
			'nombre_nivel_instruccion' => 'Nombre Nivel Instruccion',
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

		$criteria->compare('id_nivel_instruccion',$this->id_nivel_instruccion);
		$criteria->compare('nombre_nivel_instruccion',$this->nombre_nivel_instruccion,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
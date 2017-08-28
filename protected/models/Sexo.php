<?php

/**
 * This is the model class for table "sexo".
 *
 * The followings are the available columns in table 'sexo':
 * @property integer $id_sexo
 * @property string $nombre_sexo
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 * @property GrupoFamiliar[] $grupoFamiliars
 */
class Sexo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Sexo the static model class
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
		return 'sexo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_sexo', 'required'),
			array('nombre_sexo', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sexo, nombre_sexo', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_sexo'),
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'id_sexo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sexo' => 'Id Sexo',
			'nombre_sexo' => 'Nombre Sexo',
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

		$criteria->compare('id_sexo',$this->id_sexo);
		$criteria->compare('nombre_sexo',$this->nombre_sexo,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "estado_civil".
 *
 * The followings are the available columns in table 'estado_civil':
 * @property integer $id_estado_civil
 * @property string $nombre_estado_civil
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 */
class EstadoCivil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return EstadoCivil the static model class
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
		return 'estado_civil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_estado_civil', 'required'),
			array('nombre_estado_civil', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_estado_civil, nombre_estado_civil', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_estado_civil'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_estado_civil' => 'Id Estado Civil',
			'nombre_estado_civil' => 'Nombre Estado Civil',
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

		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('nombre_estado_civil',$this->nombre_estado_civil,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
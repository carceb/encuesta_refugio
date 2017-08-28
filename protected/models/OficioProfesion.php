<?php

/**
 * This is the model class for table "oficio_profesion".
 *
 * The followings are the available columns in table 'oficio_profesion':
 * @property integer $id_oficio_profesion
 * @property string $nombre_oficio_profesion
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 */
class OficioProfesion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return OficioProfesion the static model class
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
		return 'oficio_profesion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_oficio_profesion', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_oficio_profesion, nombre_oficio_profesion', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_oficio_profesion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_oficio_profesion' => 'Id Oficio Profesion',
			'nombre_oficio_profesion' => 'Oficio/Profesión',
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

		$criteria->compare('id_oficio_profesion',$this->id_oficio_profesion);
		$criteria->compare('nombre_oficio_profesion',$this->nombre_oficio_profesion,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "forma_tenencia".
 *
 * The followings are the available columns in table 'forma_tenencia':
 * @property integer $id_forma_tenencia
 * @property string $nombre_forma_tenencia
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 */
class FormaTenencia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return FormaTenencia the static model class
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
		return 'forma_tenencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_forma_tenencia', 'required'),
			array('nombre_forma_tenencia', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_forma_tenencia, nombre_forma_tenencia', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_forma_tenencia'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_forma_tenencia' => 'Id Forma Tenencia',
			'nombre_forma_tenencia' => 'Nombre Forma Tenencia',
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

		$criteria->compare('id_forma_tenencia',$this->id_forma_tenencia);
		$criteria->compare('nombre_forma_tenencia',$this->nombre_forma_tenencia,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
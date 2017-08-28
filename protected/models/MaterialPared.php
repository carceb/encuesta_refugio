<?php

/**
 * This is the model class for table "material_pared".
 *
 * The followings are the available columns in table 'material_pared':
 * @property integer $id_material_pared
 * @property string $nombre_material_pared
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 */
class MaterialPared extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return MaterialPared the static model class
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
		return 'material_pared';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_material_pared', 'required'),
			array('nombre_material_pared', 'length', 'max'=>60),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_material_pared, nombre_material_pared', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_material_pared'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_material_pared' => 'Id Material Pared',
			'nombre_material_pared' => 'Nombre Material Pared',
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

		$criteria->compare('id_material_pared',$this->id_material_pared);
		$criteria->compare('nombre_material_pared',$this->nombre_material_pared,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
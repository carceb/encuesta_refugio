<?php

/**
 * This is the model class for table "refugio".
 *
 * The followings are the available columns in table 'refugio':
 * @property integer $id_refugio
 * @property string $nombre_refugio
 * @property string $direccion
 * @property integer $id_parroquia
 * @property boolean $actividades_deportivas
 * @property boolean $banho
 * @property boolean $comision_de_cocina
 * @property boolean $comision_de_limpieza
 * @property boolean $dotacion_de_comida
 * @property boolean $dotacion_de_medicamento
 * @property boolean $dotacion_de_ropa
 * @property boolean $duchas
 * @property boolean $educacion
 * @property boolean $enfemera
 * @property boolean $medico
 * @property boolean $pediatria
 * @property boolean $recoleccion_de_basura
 * @property boolean $recreador
 * @property boolean $suministro_de_agua_potable
 * @property boolean $transporte_publico
 *
 * The followings are the available model relations:
 * @property Damnificado[] $damnificados
 * @property Parroquia $idParroquia0
 * @property RefugioServicio[] $refugioServicios
 * @property Coordinador[] $coordinadors
 */
class Refugio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Refugio the static model class
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
		return 'refugio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_refugio, direccion, id_parroquia', 'required'),
			array('id_parroquia', 'numerical', 'integerOnly'=>true),
			array('nombre_refugio', 'length', 'max'=>256),
			array('actividades_deportivas, banho, comision_de_cocina, comision_de_limpieza, dotacion_de_comida, dotacion_de_medicamento, dotacion_de_ropa, duchas, educacion, enfemera, medico, pediatria, recoleccion_de_basura, recreador, suministro_de_agua_potable, transporte_publico', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_refugio, nombre_refugio, direccion, id_parroquia, actividades_deportivas, banho, comision_de_cocina, comision_de_limpieza, dotacion_de_comida, dotacion_de_medicamento, dotacion_de_ropa, duchas, educacion, enfemera, medico, pediatria, recoleccion_de_basura, recreador, suministro_de_agua_potable, transporte_publico', 'safe', 'on'=>'search'),
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
			'damnificados' => array(self::HAS_MANY, 'Damnificado', 'id_refugio'),
			'idParroquia0' => array(self::BELONGS_TO, 'Parroquia', 'id_parroquia'),
			'refugioServicios' => array(self::HAS_MANY, 'RefugioServicio', 'id_refugio'),
			'coordinadors' => array(self::HAS_MANY, 'Coordinador', 'id_refugio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_refugio' => 'Id Refugio',
			'nombre_refugio' => 'Nombre Refugio',
			'direccion' => 'Direccion',
			'id_parroquia' => 'Id Parroquia',
			'actividades_deportivas' => 'Actividades Deportivas',
			'banho' => 'Banho',
			'comision_de_cocina' => 'Comision De Cocina',
			'comision_de_limpieza' => 'Comision De Limpieza',
			'dotacion_de_comida' => 'Dotacion De Comida',
			'dotacion_de_medicamento' => 'Dotacion De Medicamento',
			'dotacion_de_ropa' => 'Dotacion De Ropa',
			'duchas' => 'Duchas',
			'educacion' => 'Educacion',
			'enfemera' => 'Enfemera',
			'medico' => 'Medico',
			'pediatria' => 'Pediatria',
			'recoleccion_de_basura' => 'Recoleccion De Basura',
			'recreador' => 'Recreador',
			'suministro_de_agua_potable' => 'Suministro De Agua Potable',
			'transporte_publico' => 'Transporte Publico',
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

		$criteria->compare('id_refugio',$this->id_refugio);
		$criteria->compare('nombre_refugio',$this->nombre_refugio,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('actividades_deportivas',$this->actividades_deportivas);
		$criteria->compare('banho',$this->banho);
		$criteria->compare('comision_de_cocina',$this->comision_de_cocina);
		$criteria->compare('comision_de_limpieza',$this->comision_de_limpieza);
		$criteria->compare('dotacion_de_comida',$this->dotacion_de_comida);
		$criteria->compare('dotacion_de_medicamento',$this->dotacion_de_medicamento);
		$criteria->compare('dotacion_de_ropa',$this->dotacion_de_ropa);
		$criteria->compare('duchas',$this->duchas);
		$criteria->compare('educacion',$this->educacion);
		$criteria->compare('enfemera',$this->enfemera);
		$criteria->compare('medico',$this->medico);
		$criteria->compare('pediatria',$this->pediatria);
		$criteria->compare('recoleccion_de_basura',$this->recoleccion_de_basura);
		$criteria->compare('recreador',$this->recreador);
		$criteria->compare('suministro_de_agua_potable',$this->suministro_de_agua_potable);
		$criteria->compare('transporte_publico',$this->transporte_publico);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
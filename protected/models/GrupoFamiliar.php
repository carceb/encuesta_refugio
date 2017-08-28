<?php

/**
 * This is the model class for table "grupo_familiar".
 *
 * The followings are the available columns in table 'grupo_familiar':
 * @property integer $id_grupo_familiar
 * @property integer $id_damnificado
 * @property integer $cedula_damnificado
 * @property string $nombre_familiar
 * @property string $apellido_familiar
 * @property integer $id_sexo
 * @property integer $id_parentesco
 * @property integer $id_nacionalidad
 * @property integer $cedula_familiar
 * @property string $fecha_nacimiento_familiar
 * @property integer $id_nivel_instruccion
 * @property integer $id_oficio_profesion
 * @property string $direccion_trabajo
 * @property string $direccion_escuela
 * @property integer $id_enfermedad_condicion
 * @property integer $id_estado_civil
 * @property string $nombre_lugar_trabajo_familiar
 * @property string $nombre_lugar_estudio_familiar
 * @property string $direccion_lugar_estudio_familiar
 * @property integer $edad_familiar
 * @property boolean $discapacidad_motora_familiar
 * @property boolean $discapacidad_auditiva_familiar
 * @property boolean $discapacidad_visual_familiar
 * @property boolean $discapacidad_mental_familiar
 * @property string $nombre_discapacidad_familiar
 * @property boolean $indica_tratamiento_medico_familiar
 * @property string $nombre_institucion_tratamiento_medico_familiar
 * @property string $descripcion_tratamiento_medico_familiar
 * @property boolean $indica_consejo_comunal_familiar
 * @property string $nombre_consejo_comunal_familiar
 * @property string $nombre_comite_comunal_familiar
 * @property string $direccion_articulacion_comunal_familiar
 * @property boolean $indica_ayuda_institucional_familiar
 * @property string $nombre_ayuda_institucional_familiar
 * @property string $descripcion_ayuda_institucional_familiar
 *
 * The followings are the available model relations:
 * @property Damnificado $cedulaDamnificado0
 * @property Damnificado $idDamnificado0
 * @property EnfermedadCondicion $idEnfermedadCondicion0
 * @property Nacionalidad $idNacionalidad0
 * @property NivelInstruccion $idNivelInstruccion0
 * @property OficioProfesion $idOficioProfesion0
 * @property Parentesco $idParentesco0
 * @property Sexo $idSexo0
 * @property EstadoCivil $idEstadoCivil0
 */
class GrupoFamiliar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return GrupoFamiliar the static model class
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
		return 'grupo_familiar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula_damnificado, nombre_familiar, apellido_familiar, id_sexo, id_parentesco, id_nacionalidad, cedula_familiar, fecha_nacimiento_familiar, id_nivel_instruccion, id_oficio_profesion, id_enfermedad_condicion, id_estado_civil', 'required'),
			array('id_damnificado, cedula_damnificado, id_sexo, id_parentesco, id_nacionalidad, cedula_familiar, id_nivel_instruccion, id_oficio_profesion, id_enfermedad_condicion, id_estado_civil, edad_familiar', 'numerical', 'integerOnly'=>true),
			array('nombre_familiar, apellido_familiar', 'length', 'max'=>128),
			array('direccion_trabajo, direccion_escuela', 'length', 'max'=>256),
			array('nombre_lugar_trabajo_familiar, nombre_lugar_estudio_familiar, nombre_consejo_comunal_familiar, nombre_comite_comunal_familiar, nombre_ayuda_institucional_familiar', 'length', 'max'=>150),
			array('direccion_lugar_estudio_familiar, nombre_institucion_tratamiento_medico_familiar, descripcion_tratamiento_medico_familiar, direccion_articulacion_comunal_familiar, descripcion_ayuda_institucional_familiar,otra_enfermedad_condicion_familiar', 'length', 'max'=>250),
			array('nombre_discapacidad_familiar', 'length', 'max'=>200),
			array('discapacidad_motora_familiar, discapacidad_auditiva_familiar, discapacidad_visual_familiar, discapacidad_mental_familiar, indica_tratamiento_medico_familiar, indica_consejo_comunal_familiar, indica_ayuda_institucional_familiar', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_grupo_familiar, id_damnificado, cedula_damnificado, nombre_familiar, apellido_familiar, id_sexo, id_parentesco, id_nacionalidad, cedula_familiar, fecha_nacimiento_familiar, id_nivel_instruccion, id_oficio_profesion, direccion_trabajo, direccion_escuela, id_enfermedad_condicion, id_estado_civil, nombre_lugar_trabajo_familiar, nombre_lugar_estudio_familiar, direccion_lugar_estudio_familiar, edad_familiar, discapacidad_motora_familiar, discapacidad_auditiva_familiar, discapacidad_visual_familiar, discapacidad_mental_familiar, nombre_discapacidad_familiar, indica_tratamiento_medico_familiar, nombre_institucion_tratamiento_medico_familiar, descripcion_tratamiento_medico_familiar, indica_consejo_comunal_familiar, nombre_consejo_comunal_familiar, nombre_comite_comunal_familiar, direccion_articulacion_comunal_familiar, indica_ayuda_institucional_familiar, nombre_ayuda_institucional_familiar, descripcion_ayuda_institucional_familiar', 'safe', 'on'=>'search'),
                        array('cedula_familiar', 'EsGrupoFamiliarEnDamnificado', 'skipOnError'=>true),
                        array('cedula_damnificado', 'EsRepresentanteEnDamnificado', 'skipOnError'=>true),
                        array('cedula_familiar', 'FamiliarRegistrado', 'skipOnError'=>true),
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
			'cedulaDamnificado0' => array(self::BELONGS_TO, 'Damnificado', 'cedula_damnificado'),
			'idDamnificado0' => array(self::BELONGS_TO, 'Damnificado', 'id_damnificado'),
			'idEnfermedadCondicion0' => array(self::BELONGS_TO, 'EnfermedadCondicion', 'id_enfermedad_condicion'),
			'idNacionalidad0' => array(self::BELONGS_TO, 'Nacionalidad', 'id_nacionalidad'),
			'idNivelInstruccion0' => array(self::BELONGS_TO, 'NivelInstruccion', 'id_nivel_instruccion'),
			'idOficioProfesion0' => array(self::BELONGS_TO, 'OficioProfesion', 'id_oficio_profesion'),
			'idParentesco0' => array(self::BELONGS_TO, 'Parentesco', 'id_parentesco'),
			'idSexo0' => array(self::BELONGS_TO, 'Sexo', 'id_sexo'),
			'idEstadoCivil0' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_grupo_familiar' => 'Id Grupo Familiar',
			'id_damnificado' => 'Id Damnificado',
			'cedula_damnificado' => 'Cedula Damnificado',
			'nombre_familiar' => 'Nombre Familiar',
			'apellido_familiar' => 'Apellido Familiar',
			'id_sexo' => 'Id Sexo',
			'id_parentesco' => 'Id Parentesco',
			'id_nacionalidad' => 'Id Nacionalidad',
			'cedula_familiar' => 'Cedula Familiar',
			'fecha_nacimiento_familiar' => 'Fecha Nacimiento Familiar',
			'id_nivel_instruccion' => 'Id Nivel Instruccion',
			'id_oficio_profesion' => 'Id Oficio Profesion',
			'direccion_trabajo' => 'Direccion Trabajo',
			'direccion_escuela' => 'Direccion Escuela',
			'id_enfermedad_condicion' => 'Id Enfermedad Condicion',
			'id_estado_civil' => 'Id Estado Civil',
			'nombre_lugar_trabajo_familiar' => 'Nombre Lugar Trabajo Familiar',
			'nombre_lugar_estudio_familiar' => 'Nombre Lugar Estudio Familiar',
			'direccion_lugar_estudio_familiar' => 'Direccion Lugar Estudio Familiar',
			'edad_familiar' => 'Edad Familiar',
			'discapacidad_motora_familiar' => 'Discapacidad Motora Familiar',
			'discapacidad_auditiva_familiar' => 'Discapacidad Auditiva Familiar',
			'discapacidad_visual_familiar' => 'Discapacidad Visual Familiar',
			'discapacidad_mental_familiar' => 'Discapacidad Mental Familiar',
			'nombre_discapacidad_familiar' => 'Nombre Discapacidad Familiar',
			'indica_tratamiento_medico_familiar' => 'Indica Tratamiento Medico Familiar',
			'nombre_institucion_tratamiento_medico_familiar' => 'Nombre Institucion Tratamiento Medico Familiar',
			'descripcion_tratamiento_medico_familiar' => 'Descripcion Tratamiento Medico Familiar',
			'indica_consejo_comunal_familiar' => 'Indica Consejo Comunal Familiar',
			'nombre_consejo_comunal_familiar' => 'Nombre Consejo Comunal Familiar',
			'nombre_comite_comunal_familiar' => 'Nombre Comite Comunal Familiar',
			'direccion_articulacion_comunal_familiar' => 'Direccion Articulacion Comunal Familiar',
			'indica_ayuda_institucional_familiar' => 'Indica Ayuda Institucional Familiar',
			'nombre_ayuda_institucional_familiar' => 'Nombre Ayuda Institucional Familiar',
			'descripcion_ayuda_institucional_familiar' => 'Descripcion Ayuda Institucional Familiar',
                        'otra_enfermedad_condicion_familiar' => 'Otra Enfermedad Condicion Familiar',
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

		$criteria->compare('id_grupo_familiar',$this->id_grupo_familiar);
		$criteria->compare('id_damnificado',$this->id_damnificado);
		$criteria->compare('cedula_damnificado',$this->cedula_damnificado);
		$criteria->compare('nombre_familiar',$this->nombre_familiar,true);
		$criteria->compare('apellido_familiar',$this->apellido_familiar,true);
		$criteria->compare('id_sexo',$this->id_sexo);
		$criteria->compare('id_parentesco',$this->id_parentesco);
		$criteria->compare('id_nacionalidad',$this->id_nacionalidad);
		$criteria->compare('cedula_familiar',$this->cedula_familiar);
		$criteria->compare('fecha_nacimiento_familiar',$this->fecha_nacimiento_familiar,true);
		$criteria->compare('id_nivel_instruccion',$this->id_nivel_instruccion);
		$criteria->compare('id_oficio_profesion',$this->id_oficio_profesion);
		$criteria->compare('direccion_trabajo',$this->direccion_trabajo,true);
		$criteria->compare('direccion_escuela',$this->direccion_escuela,true);
		$criteria->compare('id_enfermedad_condicion',$this->id_enfermedad_condicion);
		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('nombre_lugar_trabajo_familiar',$this->nombre_lugar_trabajo_familiar,true);
		$criteria->compare('nombre_lugar_estudio_familiar',$this->nombre_lugar_estudio_familiar,true);
		$criteria->compare('direccion_lugar_estudio_familiar',$this->direccion_lugar_estudio_familiar,true);
		$criteria->compare('edad_familiar',$this->edad_familiar);
		$criteria->compare('discapacidad_motora_familiar',$this->discapacidad_motora_familiar);
		$criteria->compare('discapacidad_auditiva_familiar',$this->discapacidad_auditiva_familiar);
		$criteria->compare('discapacidad_visual_familiar',$this->discapacidad_visual_familiar);
		$criteria->compare('discapacidad_mental_familiar',$this->discapacidad_mental_familiar);
		$criteria->compare('nombre_discapacidad_familiar',$this->nombre_discapacidad_familiar,true);
		$criteria->compare('indica_tratamiento_medico_familiar',$this->indica_tratamiento_medico_familiar);
		$criteria->compare('nombre_institucion_tratamiento_medico_familiar',$this->nombre_institucion_tratamiento_medico_familiar,true);
		$criteria->compare('descripcion_tratamiento_medico_familiar',$this->descripcion_tratamiento_medico_familiar,true);
		$criteria->compare('indica_consejo_comunal_familiar',$this->indica_consejo_comunal_familiar);
		$criteria->compare('nombre_consejo_comunal_familiar',$this->nombre_consejo_comunal_familiar,true);
		$criteria->compare('nombre_comite_comunal_familiar',$this->nombre_comite_comunal_familiar,true);
		$criteria->compare('direccion_articulacion_comunal_familiar',$this->direccion_articulacion_comunal_familiar,true);
		$criteria->compare('indica_ayuda_institucional_familiar',$this->indica_ayuda_institucional_familiar);
		$criteria->compare('nombre_ayuda_institucional_familiar',$this->nombre_ayuda_institucional_familiar,true);
		$criteria->compare('descripcion_ayuda_institucional_familiar',$this->descripcion_ayuda_institucional_familiar,true);
                $criteria->compare('otra_enfermedad_condicion_familiar',$this->otra_enfermedad_condicion_familiar,true);
		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

        public function FamiliarRegistrado()
        {
            $objetoProcesos = new ProcesosDamnificados();
            if($this->id_grupo_familiar==0)
            {
                if($objetoProcesos->EsFamiliarRegistrado($this->cedula_familiar))
                {
                    $this->addError('cedula_familiar','Esta cédula ya esta registrada como familiar.');
                }
            }
        }
        
        public function EsGrupoFamiliarEnDamnificado()
        {
            $objetoProcesos = new ProcesosDamnificados();
            if($objetoProcesos->EsGrupoFamiliarEnDamnificado($this->cedula_familiar))
            {
                $this->addError('cedula_familiar','Esta cédula ya esta registrada como Representante de Grupo Familiar.');
            }
        }

         public function EsRepresentanteEnDamnificado()
        {
            $objetoProcesos = new ProcesosDamnificados();
            if($objetoProcesos->EsGrupoFamiliarEnDamnificado($this->cedula_damnificado)==false)
            {
                $this->addError('cedula_damnificado','Esta cédula no esta registrada como Representante de Grupo Familiar.');
            }
        }
}
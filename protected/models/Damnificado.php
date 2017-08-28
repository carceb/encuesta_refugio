<?php

/**
 * This is the model class for table "damnificado".
 *
 * The followings are the available columns in table 'damnificado':
 * @property integer $id_damnificado
 * @property integer $id_refugio
 * @property integer $id_parroquia
 * @property string $nombre_damnificado
 * @property string $apellido_damnificado
 * @property integer $id_sexo
 * @property integer $id_nacionalidad
 * @property integer $cedula_damnificado
 * @property string $telefono
 * @property string $fecha_nacimiento
 * @property integer $id_nivel_instruccion
 * @property integer $id_oficio_profesion
 * @property string $direccion_trabajo
 * @property integer $id_forma_tenencia
 * @property integer $id_tipo_vivienda
 * @property string $direccion_vivienda
 * @property integer $id_enfermedad_condicion
 * @property string $fecha_ingreso_refugio
 * @property integer $id_estado_civil
 * @property string $otra_enfermedad
 * @property integer $id_refugio_procedencia
 * @property string $correo_electronico
 * @property string $nombre_lugar_trabajo
 * @property string $nombre_lugar_estudio
 * @property string $direccion_lugar_estudio
 * @property integer $edad_representante
 * @property integer $id_situacion_vivienda
 * @property boolean $discapacidad_motora
 * @property boolean $discapacidad_auditiva
 * @property boolean $discapacidad_visual
 * @property boolean $discapacidad_mental
 * @property string $nombre_discapacidad
 * @property boolean $indica_tratamiento_medico
 * @property string $nombre_institucion_tratamiento_medico
 * @property string $descripcion_tratamiento_medico
 * @property boolean $indica_consejo_comunal
 * @property string $nombre_consejo_comunal
 * @property string $nombre_comite_comunal
 * @property string $direccion_articulacion_comunal
 * @property boolean $indica_ayuda_institucional
 * @property string $nombre_ayuda_institucional
 * @property string $descripcion_ayuda_institucional
 * @property integer $id_motivo_desalojo
 *
 * The followings are the available model relations:
 * @property GrupoFamiliar[] $grupoFamiliars
 * @property FormaTenencia $idFormaTenencia0
 * @property EnfermedadCondicion $idEnfermedadCondicion0
 * @property Nacionalidad $idNacionalidad0
 * @property NivelInstruccion $idNivelInstruccion0
 * @property OficioProfesion $idOficioProfesion0
 * @property Parroquia $idParroquia0
 * @property Refugio $idRefugio0
 * @property Sexo $idSexo0
 * @property TipoVivienda $idTipoVivienda0
 * @property EstadoCivil $idEstadoCivil0
 * @property Refugio $idRefugioProcedencia0
 * @property SituacionVivienda $idSituacionVivienda0
 * @property MotivoDesalojo $idMotivoDesalojo0
 */
class Damnificado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Damnificado the static model class
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
		return 'damnificado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_refugio, id_parroquia, nombre_damnificado, apellido_damnificado, id_sexo, id_nacionalidad, cedula_damnificado, id_nivel_instruccion, id_forma_tenencia, id_tipo_vivienda, direccion_vivienda, id_enfermedad_condicion, fecha_ingreso_refugio, id_estado_civil, id_refugio_procedencia, edad_representante, id_situacion_vivienda, id_motivo_desalojo', 'required'),
			array('id_refugio, id_parroquia, id_sexo, id_nacionalidad, cedula_damnificado, id_nivel_instruccion, id_oficio_profesion, id_forma_tenencia, id_tipo_vivienda, id_enfermedad_condicion, id_estado_civil, id_refugio_procedencia, edad_representante, id_situacion_vivienda, id_motivo_desalojo', 'numerical', 'integerOnly'=>true),
			array('nombre_damnificado, apellido_damnificado, telefono', 'length', 'max'=>128),
			array('direccion_trabajo, direccion_vivienda', 'length', 'max'=>256),
			array('otra_enfermedad, nombre_lugar_estudio, nombre_discapacidad', 'length', 'max'=>200),
			array('correo_electronico, nombre_institucion_tratamiento_medico', 'length', 'max'=>100),
			array('nombre_lugar_trabajo, direccion_lugar_estudio', 'length', 'max'=>255),
			array('nombre_consejo_comunal, nombre_comite_comunal, nombre_ayuda_institucional', 'length', 'max'=>150),
			array('direccion_articulacion_comunal, descripcion_ayuda_institucional', 'length', 'max'=>250),
			array('fecha_nacimiento, discapacidad_motora, discapacidad_auditiva, discapacidad_visual, discapacidad_mental, indica_tratamiento_medico, descripcion_tratamiento_medico, indica_consejo_comunal, indica_ayuda_institucional', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_damnificado, id_refugio, id_parroquia, nombre_damnificado, apellido_damnificado, id_sexo, id_nacionalidad, cedula_damnificado, telefono, fecha_nacimiento, id_nivel_instruccion, id_oficio_profesion, direccion_trabajo, id_forma_tenencia, id_tipo_vivienda, direccion_vivienda, id_enfermedad_condicion, fecha_ingreso_refugio, id_estado_civil, otra_enfermedad, id_refugio_procedencia, correo_electronico, nombre_lugar_trabajo, nombre_lugar_estudio, direccion_lugar_estudio, edad_representante, id_situacion_vivienda, discapacidad_motora, discapacidad_auditiva, discapacidad_visual, discapacidad_mental, nombre_discapacidad, indica_tratamiento_medico, nombre_institucion_tratamiento_medico, descripcion_tratamiento_medico, indica_consejo_comunal, nombre_consejo_comunal, nombre_comite_comunal, direccion_articulacion_comunal, indica_ayuda_institucional, nombre_ayuda_institucional, descripcion_ayuda_institucional, id_motivo_desalojo', 'safe', 'on'=>'search'),
                        array('cedula_damnificado', 'EsDamnificadoRegistrado', 'skipOnError'=>true),
                        array('cedula_damnificado', 'EsDamnificadoEnGrupoFamiliar', 'skipOnError'=>true),
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
			'grupoFamiliars' => array(self::HAS_MANY, 'GrupoFamiliar', 'id_damnificado'),
			'idFormaTenencia0' => array(self::BELONGS_TO, 'FormaTenencia', 'id_forma_tenencia'),
			'idEnfermedadCondicion0' => array(self::BELONGS_TO, 'EnfermedadCondicion', 'id_enfermedad_condicion'),
			'idNacionalidad0' => array(self::BELONGS_TO, 'Nacionalidad', 'id_nacionalidad'),
			'idNivelInstruccion0' => array(self::BELONGS_TO, 'NivelInstruccion', 'id_nivel_instruccion'),
			'idOficioProfesion0' => array(self::BELONGS_TO, 'OficioProfesion', 'id_oficio_profesion'),
			'idParroquia0' => array(self::BELONGS_TO, 'Parroquia', 'id_parroquia'),
			'idRefugio0' => array(self::BELONGS_TO, 'Refugio', 'id_refugio'),
			'idSexo0' => array(self::BELONGS_TO, 'Sexo', 'id_sexo'),
			'idTipoVivienda0' => array(self::BELONGS_TO, 'TipoVivienda', 'id_tipo_vivienda'),
			'idEstadoCivil0' => array(self::BELONGS_TO, 'EstadoCivil', 'id_estado_civil'),
			'idRefugioProcedencia0' => array(self::BELONGS_TO, 'Refugio', 'id_refugio_procedencia'),
			'idSituacionVivienda0' => array(self::BELONGS_TO, 'SituacionVivienda', 'id_situacion_vivienda'),
			'idMotivoDesalojo0' => array(self::BELONGS_TO, 'MotivoDesalojo', 'id_motivo_desalojo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_damnificado' => 'Id Damnificado',
			'id_refugio' => 'Id Refugio',
			'id_parroquia' => 'Parroquia',
			'nombre_damnificado' => 'Nombre Representante',
			'apellido_damnificado' => 'Apellido Representante',
			'id_sexo' => 'Sexo',
			'id_nacionalidad' => 'Nacionalidad',
			'cedula_damnificado' => 'Cedula Representante',
			'telefono' => 'Telefono',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'id_nivel_instruccion' => 'Nivel Instruccion',
			'id_oficio_profesion' => 'Oficio/Profesion',
			'direccion_trabajo' => 'Direccion Trabajo',
			'id_forma_tenencia' => 'Forma Tenencia de Vivienda',
			'id_tipo_vivienda' => 'Tipo Vivienda',
			'direccion_vivienda' => 'Direccion Vivienda',
			'id_enfermedad_condicion' => 'Enfermedad/Condicion',
			'fecha_ingreso_refugio' => 'Fecha Ingreso Refugio',
			'id_estado_civil' => 'Estado Civil',
			'otra_enfermedad' => 'Otra Enfermedad',
			'id_refugio_procedencia' => 'Refugio Procedencia',
			'correo_electronico' => 'Correo Electronico',
			'nombre_lugar_trabajo' => 'Nombre Lugar Trabajo',
			'nombre_lugar_estudio' => 'Nombre Lugar Estudio',
			'direccion_lugar_estudio' => 'Direccion Estudio',
			'edad_representante' => 'Edad',
			'id_situacion_vivienda' => 'Situacion de la Vivienda',
			'discapacidad_motora' => 'Discapacidad Motora',
			'discapacidad_auditiva' => 'Discapacidad Auditiva',
			'discapacidad_visual' => 'Discapacidad Visual',
			'discapacidad_mental' => 'Discapacidad Mental',
			'nombre_discapacidad' => 'Explique discapacidad',
			'indica_tratamiento_medico' => 'Tratamiento Medico',
			'nombre_institucion_tratamiento_medico' => 'Institución Tratamiento Medico',
			'descripcion_tratamiento_medico' => 'Tratamiento Medico recibido',
			'indica_consejo_comunal' => '¿Pertenece usted algún Consejo comunal?',
			'nombre_consejo_comunal' => 'Nombre del Consejo Comunal',
			'nombre_comite_comunal' => 'Nombre del Comité que integra',
			'direccion_articulacion_comunal' => 'Direccion de Articulacion del consejo comunal',
			'indica_ayuda_institucional' => '¿Ha recibido ayuda de alguna institución?',
			'nombre_ayuda_institucional' => 'Nombre de la Institución',
			'descripcion_ayuda_institucional' => 'Tipo de ayuda',
			'id_motivo_desalojo' => '¿Quién le sugirió que abandonara la vivienda?',
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

		$criteria->compare('id_damnificado',$this->id_damnificado);
		$criteria->compare('id_refugio',$this->id_refugio);
		$criteria->compare('id_parroquia',$this->id_parroquia);
		$criteria->compare('nombre_damnificado',$this->nombre_damnificado,true);
		$criteria->compare('apellido_damnificado',$this->apellido_damnificado,true);
		$criteria->compare('id_sexo',$this->id_sexo);
		$criteria->compare('id_nacionalidad',$this->id_nacionalidad);
		$criteria->compare('cedula_damnificado',$this->cedula_damnificado);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('id_nivel_instruccion',$this->id_nivel_instruccion);
		$criteria->compare('id_oficio_profesion',$this->id_oficio_profesion);
		$criteria->compare('direccion_trabajo',$this->direccion_trabajo,true);
		$criteria->compare('id_forma_tenencia',$this->id_forma_tenencia);
		$criteria->compare('id_tipo_vivienda',$this->id_tipo_vivienda);
		$criteria->compare('direccion_vivienda',$this->direccion_vivienda,true);
		$criteria->compare('id_enfermedad_condicion',$this->id_enfermedad_condicion);
		$criteria->compare('fecha_ingreso_refugio',$this->fecha_ingreso_refugio,true);
		$criteria->compare('id_estado_civil',$this->id_estado_civil);
		$criteria->compare('otra_enfermedad',$this->otra_enfermedad,true);
		$criteria->compare('id_refugio_procedencia',$this->id_refugio_procedencia);
		$criteria->compare('correo_electronico',$this->correo_electronico,true);
		$criteria->compare('nombre_lugar_trabajo',$this->nombre_lugar_trabajo,true);
		$criteria->compare('nombre_lugar_estudio',$this->nombre_lugar_estudio,true);
		$criteria->compare('direccion_lugar_estudio',$this->direccion_lugar_estudio,true);
		$criteria->compare('edad_representante',$this->edad_representante);
		$criteria->compare('id_situacion_vivienda',$this->id_situacion_vivienda);
		$criteria->compare('discapacidad_motora',$this->discapacidad_motora);
		$criteria->compare('discapacidad_auditiva',$this->discapacidad_auditiva);
		$criteria->compare('discapacidad_visual',$this->discapacidad_visual);
		$criteria->compare('discapacidad_mental',$this->discapacidad_mental);
		$criteria->compare('nombre_discapacidad',$this->nombre_discapacidad,true);
		$criteria->compare('indica_tratamiento_medico',$this->indica_tratamiento_medico);
		$criteria->compare('nombre_institucion_tratamiento_medico',$this->nombre_institucion_tratamiento_medico,true);
		$criteria->compare('descripcion_tratamiento_medico',$this->descripcion_tratamiento_medico,true);
		$criteria->compare('indica_consejo_comunal',$this->indica_consejo_comunal);
		$criteria->compare('nombre_consejo_comunal',$this->nombre_consejo_comunal,true);
		$criteria->compare('nombre_comite_comunal',$this->nombre_comite_comunal,true);
		$criteria->compare('direccion_articulacion_comunal',$this->direccion_articulacion_comunal,true);
		$criteria->compare('indica_ayuda_institucional',$this->indica_ayuda_institucional);
		$criteria->compare('nombre_ayuda_institucional',$this->nombre_ayuda_institucional,true);
		$criteria->compare('descripcion_ayuda_institucional',$this->descripcion_ayuda_institucional,true);
		$criteria->compare('id_motivo_desalojo',$this->id_motivo_desalojo);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}


        public function EsDamnificadoRegistrado()
        {
            $objetoProcesos = new ProcesosDamnificados();
            if($this->id_damnificado == 0)
            {
                if($objetoProcesos->EsDamnificadoRegistrado($this->cedula_damnificado))
                {
                    $this->addError('cedula_damnificado','Esta cédula está registrada como representante de familia.');
                }
            }
        }

        public function EsDamnificadoEnGrupoFamiliar()
        {
            $objetoProcesos = new ProcesosDamnificados();
            if($objetoProcesos->EsDamnificadoEnGrupoFamiliar($this->cedula_damnificado))
            {
                $this->addError('cedula_damnificado','Esta cédula ya esta registrada como grupo familiar.');
            }
        }





}
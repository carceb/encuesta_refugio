<?php
$this->breadcrumbs=array(
	'Representantes de Familia'=>array('index'),
	$model->id_damnificado,
);

$this->menu=array(
	array('label'=>'Listar Representantes de Familia', 'url'=>array('index')),
	array('label'=>'Agregar Representante de Familia', 'url'=>array('create')),
	array('label'=>'Modificar Representante de Familia', 'url'=>array('update', 'id'=>$model->id_damnificado)),
	array('label'=>'Eliminar Representante de Familia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_damnificado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Representantes de Familia', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nombre_damnificado; ?> <?php echo $model->apellido_damnificado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRefugio0.nombre_refugio',
		'idParroquia0.nombre_parroquia',
		'nombre_damnificado',
		'apellido_damnificado',
		'idSexo0.nombre_sexo',
		'idNacionalidad0.nombre_nacionalidad',
		'cedula_damnificado',
		'telefono',
		'fecha_nacimiento',
		'edad_representante',
		'idNivelInstruccion0.nombre_nivel_instruccion',
		'idOficioProfesion0.nombre_oficio_profesion',
		'direccion_trabajo',
		'idFormaTenencia0.nombre_forma_tenencia',
		'idTipoVivienda0.nombre_tipo_vivienda',
		'direccion_vivienda',
		'idEnfermedadCondicion0.nombre_enfermedad_condicion',
		'fecha_ingreso_refugio',
		'idEstadoCivil0.nombre_estado_civil',
		'otra_enfermedad',
		'idRefugioProcedencia0.nombre_refugio',
		'correo_electronico',
		'nombre_lugar_trabajo',
		'nombre_lugar_estudio',
		'direccion_lugar_estudio',
		'idSituacionVivienda0.nombre_situacion_vivienda',
		'discapacidad_motora',
		'discapacidad_auditiva',
		'discapacidad_visual',
		'discapacidad_mental',
		'nombre_discapacidad',
		'indica_tratamiento_medico',
		'nombre_institucion_tratamiento_medico',
		'descripcion_tratamiento_medico',
		'indica_consejo_comunal',
		'nombre_consejo_comunal',
		'nombre_comite_comunal',
		'direccion_articulacion_comunal',
		'indica_ayuda_institucional',
		'nombre_ayuda_institucional',
		'descripcion_ayuda_institucional',
		'idMotivoDesalojo0.nombre_motivo_desalojo',
	),
)); ?>

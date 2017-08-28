<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	$model->id_grupo_familiar,
);

$this->menu=array(
	array('label'=>'Listar Grupo Familiar', 'url'=>array('index')),
	array('label'=>'Agregar Familiar', 'url'=>array('create')),
	array('label'=>'Modificar Familiar', 'url'=>array('update', 'id'=>$model->id_grupo_familiar)),
	array('label'=>'Eliminar Familiar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_grupo_familiar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Grupo Familiar', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nombre_familiar.' '.$model->apellido_familiar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_damnificado',
		'nombre_familiar',
		'apellido_familiar',
		'idSexo0.nombre_sexo',
		'idParentesco0.nombre_parentesco',
		'idNacionalidad0.nombre_nacionalidad',
		'cedula_familiar',
		'fecha_nacimiento_familiar',
		'idNivelInstruccion0.nombre_nivel_instruccion',
		'idOficioProfesion0.nombre_oficio_profesion',
		'direccion_trabajo',
		'direccion_escuela',
		'idEnfermedadCondicion0.nombre_enfermedad_condicion',
		'idEstadoCivil0.nombre_estado_civil',
		'nombre_lugar_trabajo_familiar',
		'nombre_lugar_estudio_familiar',
		'direccion_lugar_estudio_familiar',
		'edad_familiar',
		'discapacidad_motora_familiar',
		'discapacidad_auditiva_familiar',
		'discapacidad_visual_familiar',
		'discapacidad_mental_familiar',
		'nombre_discapacidad_familiar',
		'indica_tratamiento_medico_familiar',
		'nombre_institucion_tratamiento_medico_familiar',
		'descripcion_tratamiento_medico_familiar',
		'indica_consejo_comunal_familiar',
		'nombre_consejo_comunal_familiar',
		'nombre_comite_comunal_familiar',
		'direccion_articulacion_comunal_familiar',
		'indica_ayuda_institucional_familiar',
		'nombre_ayuda_institucional_familiar',
		'descripcion_ayuda_institucional_familiar',
	),
)); ?>

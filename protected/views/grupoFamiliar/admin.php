<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Grupo Familiar', 'url'=>array('index')),
	array('label'=>'Agregar Familiar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('grupo-familiar-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Grupo Familiar</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grupo-familiar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'enableSorting' => true,

	'columns'=>array(
    		'cedula_damnificado',
                'cedulaDamnificado0.nombre_damnificado',
                'cedulaDamnificado0.apellido_damnificado',
                'cedula_familiar',
                'nombre_familiar',
		'apellido_familiar',
		/*
		'id_parentesco',
		'id_nacionalidad',
		'cedula_familiar',
		'fecha_nacimiento_familiar',
		'id_nivel_instruccion',
		'id_oficio_profesion',
		'direccion_trabajo',
		'direccion_escuela',
		'id_enfermedad_condicion',
		'id_estado_civil',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

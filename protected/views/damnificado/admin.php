<?php
$this->breadcrumbs=array(
	'Representantes de Familia'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Representantes de Familia', 'url'=>array('index')),
	array('label'=>'Agregar Representante de Familia', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('damnificado-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Representantes de Familia</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'damnificado-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'cedula_damnificado',
		'nombre_damnificado',
		'apellido_damnificado',
                'fecha_nacimiento',
                'edad_representante',
                'direccion_trabajo',
		/*
		'id_nacionalidad',
		'telefono',
		'fecha_nacimiento',
		'id_nivel_instruccion',
		'id_oficio_profesion',
		'direccion_trabajo',
		'id_forma_tenencia',
		'id_tipo_vivienda',
		'direccion_vivienda',
		'id_enfermedad_condicion',
		'fecha_ingreso_refugio',
		'id_estado_civil',
		'otra_enfermedad',
		'id_refugio_procedencia',
		'correo_electronico',
		'nombre_lugar_trabajo',
		'nombre_lugar_estudio',
		'direccion_lugar_estudio',
		'edad_representante',
		'id_situacion_vivienda',
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
		'id_motivo_desalojo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

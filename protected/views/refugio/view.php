<?php
$this->breadcrumbs=array(
	'Refugios'=>array('index'),
	$model->id_refugio,
);

$this->menu=array(
	array('label'=>'List Refugio', 'url'=>array('index')),
	array('label'=>'Create Refugio', 'url'=>array('create')),
	array('label'=>'Update Refugio', 'url'=>array('update', 'id'=>$model->id_refugio)),
	array('label'=>'Delete Refugio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_refugio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Refugio', 'url'=>array('admin')),
);
?>

<h1>View Refugio #<?php echo $model->id_refugio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_refugio',
		'nombre_refugio',
		'direccion',
		'id_parroquia',
		'actividades_deportivas',
		'banho',
		'comision_de_cocina',
		'comision_de_limpieza',
		'dotacion_de_comida',
		'dotacion_de_medicamento',
		'dotacion_de_ropa',
		'duchas',
		'educacion',
		'enfemera',
		'medico',
		'pediatria',
		'recoleccion_de_basura',
		'recreador',
		'suministro_de_agua_potable',
		'transporte_publico',
	),
)); ?>

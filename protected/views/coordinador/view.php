<?php
$this->breadcrumbs=array(
	'Representante Refugio'=>array('index'),
	$model->id_coordinador,
);

$this->menu=array(
	array('label'=>'Lista Representantes refugios', 'url'=>array('index')),
	array('label'=>'Crear Representante refugio', 'url'=>array('create')),
	array('label'=>'Modificar Representante Refugio', 'url'=>array('update', 'id'=>$model->id_coordinador)),
	array('label'=>'Eliminar Representante Refugio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_coordinador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Representantes Refugios', 'url'=>array('admin')),
);
?>

<h1>Representante Refugio: <?php echo $model->nombre_coordinador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cedula_coordinador',
		'nombre_coordinador',
		'tlf_coordinador',
		'correo',
		'idRefugio0.nombre_refugio',
	),
)); ?>

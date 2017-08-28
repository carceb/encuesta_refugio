<?php
$this->breadcrumbs=array(
	'Oficio/Profesión'=>array('index'),
	$model->id_oficio_profesion,
);

$this->menu=array(
	array('label'=>'Listar Oficio/Profesión', 'url'=>array('index')),
	array('label'=>'Crear Oficio/Profesión', 'url'=>array('create')),
	array('label'=>'Modificar Oficio/Profesión', 'url'=>array('update', 'id'=>$model->id_oficio_profesion)),
	array('label'=>'Eliminar Oficio/Profesión', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_oficio_profesion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Oficio/Profesión', 'url'=>array('admin')),
);
?>

<h1>Ver Oficio/Profesión #<?php echo $model->id_oficio_profesion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_oficio_profesion',
		'nombre_oficio_profesion',
	),
)); ?>

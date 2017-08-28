<?php
$this->breadcrumbs=array(
	'Enfermedad Condicions'=>array('index'),
	$model->id_enfermedad_condicion,
);

$this->menu=array(
	array('label'=>'List EnfermedadCondicion', 'url'=>array('index')),
	array('label'=>'Create EnfermedadCondicion', 'url'=>array('create')),
	array('label'=>'Update EnfermedadCondicion', 'url'=>array('update', 'id'=>$model->id_enfermedad_condicion)),
	array('label'=>'Delete EnfermedadCondicion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_enfermedad_condicion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EnfermedadCondicion', 'url'=>array('admin')),
);
?>

<h1>View EnfermedadCondicion #<?php echo $model->id_enfermedad_condicion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_enfermedad_condicion',
		'nombre_enfermedad_condicion',
	),
)); ?>

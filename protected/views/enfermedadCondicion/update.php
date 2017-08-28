<?php
$this->breadcrumbs=array(
	'Enfermedad Condicions'=>array('index'),
	$model->id_enfermedad_condicion=>array('view','id'=>$model->id_enfermedad_condicion),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnfermedadCondicion', 'url'=>array('index')),
	array('label'=>'Create EnfermedadCondicion', 'url'=>array('create')),
	array('label'=>'View EnfermedadCondicion', 'url'=>array('view', 'id'=>$model->id_enfermedad_condicion)),
	array('label'=>'Manage EnfermedadCondicion', 'url'=>array('admin')),
);
?>

<h1>Update EnfermedadCondicion <?php echo $model->id_enfermedad_condicion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
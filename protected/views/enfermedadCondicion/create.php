<?php
$this->breadcrumbs=array(
	'Enfermedad Condicions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EnfermedadCondicion', 'url'=>array('index')),
	array('label'=>'Manage EnfermedadCondicion', 'url'=>array('admin')),
);
?>

<h1>Create EnfermedadCondicion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
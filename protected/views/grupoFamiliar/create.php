<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Listar Grupo Familiar', 'url'=>array('index')),
	array('label'=>'Administrar Grupo Familiar', 'url'=>array('admin')),
);
?>

<h1>Agregar Familiar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
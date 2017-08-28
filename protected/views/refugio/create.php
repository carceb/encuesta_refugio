<?php
$this->breadcrumbs=array(
	'Refugios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Refugios', 'url'=>array('index')),
	array('label'=>'Administrar Refugios', 'url'=>array('admin')),
);
?>

<h1>Crear Refugio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
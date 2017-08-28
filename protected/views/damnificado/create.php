<?php
$this->breadcrumbs=array(
	'Representantes de Familia'=>array('index'),
	'Agregar Representante de Familia',
);

$this->menu=array(
	array('label'=>'Listar Representantes de Familia', 'url'=>array('index')),
	array('label'=>'Administrar Representantes de Familia', 'url'=>array('admin')),
);
?>

<h1>Agregar Representante de Familia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
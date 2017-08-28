<?php
$this->breadcrumbs=array(
	'Representante Refugio'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Representantes Refugios', 'url'=>array('index')),
	array('label'=>'Administrar Representante Refugio', 'url'=>array('admin')),
);
?>

<h1>Crear Representante Refugio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
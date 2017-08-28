<?php
$this->breadcrumbs=array(
	'Representante Refugio'=>array('index'),
	$model->id_coordinador=>array('view','id'=>$model->id_coordinador),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista Representantes Refugios', 'url'=>array('index')),
	array('label'=>'Crear Representante Refugio', 'url'=>array('create')),
	array('label'=>'Modificar Representante Refugio', 'url'=>array('view', 'id'=>$model->id_coordinador)),
	array('label'=>'Administrar Representantes Refugios', 'url'=>array('admin')),
);
?>

<h1>Modificar Representante Refugio: <?php echo $model->nombre_coordinador; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
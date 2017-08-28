<?php
$this->breadcrumbs=array(
	'Representantes de Familia'=>array('index'),
	$model->id_damnificado=>array('view','id'=>$model->id_damnificado),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Representantes de Familia', 'url'=>array('index')),
	array('label'=>'Agregar Representante de Familia', 'url'=>array('create')),
	array('label'=>'Ver Representante de Familia', 'url'=>array('view', 'id'=>$model->id_damnificado)),
	array('label'=>'Administrar Representantes de Familia', 'url'=>array('admin')),
);
?>

<h1>Modificar <?php echo $model->nombre_damnificado. " " .$model->apellido_damnificado; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
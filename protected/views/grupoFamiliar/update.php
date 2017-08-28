<?php
$this->breadcrumbs=array(
	'Grupo Familiar'=>array('index'),
	$model->id_grupo_familiar=>array('view','id'=>$model->id_grupo_familiar),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar Grupo Familiar', 'url'=>array('index')),
	array('label'=>'Agregar Familiar', 'url'=>array('create')),
	array('label'=>'Modificar Familiar', 'url'=>array('view', 'id'=>$model->id_grupo_familiar)),
	array('label'=>'Administrar Grupo Familiar', 'url'=>array('admin')),
);
?>

<h1>Modificar <?php echo $model->nombre_familiar.' '.$model->apellido_familiar; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
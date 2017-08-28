<?php
$this->breadcrumbs=array(
	'Oficio/Profesión'=>array('index'),
	$model->id_oficio_profesion=>array('view','id'=>$model->id_oficio_profesion),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Oficio/Profesión', 'url'=>array('index')),
	array('label'=>'Crear Oficio/Profesión', 'url'=>array('create')),
	array('label'=>'Modificar Oficio/Profesión', 'url'=>array('view', 'id'=>$model->id_oficio_profesion)),
	array('label'=>'Administrar Oficio/Profesión', 'url'=>array('admin')),
);
?>

<h1>Modificar Oficio/Profesi&oacute;n <?php echo $model->id_oficio_profesion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
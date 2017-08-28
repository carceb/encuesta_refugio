<?php
$this->breadcrumbs=array(
	'Refugios'=>array('index'),
	$model->id_refugio=>array('view','id'=>$model->id_refugio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Refugio', 'url'=>array('index')),
	array('label'=>'Create Refugio', 'url'=>array('create')),
	array('label'=>'View Refugio', 'url'=>array('view', 'id'=>$model->id_refugio)),
	array('label'=>'Manage Refugio', 'url'=>array('admin')),
);
?>

<h1>Update Refugio <?php echo $model->id_refugio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
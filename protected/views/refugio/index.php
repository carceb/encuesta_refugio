<?php
$this->breadcrumbs=array(
	'Refugios',
);

$this->menu=array(
	array('label'=>'Create Refugio', 'url'=>array('create')),
	array('label'=>'Manage Refugio', 'url'=>array('admin')),
);
?>

<h1>Refugios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

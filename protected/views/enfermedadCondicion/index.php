<?php
$this->breadcrumbs=array(
	'Enfermedad Condicions',
);

$this->menu=array(
	array('label'=>'Create EnfermedadCondicion', 'url'=>array('create')),
	array('label'=>'Manage EnfermedadCondicion', 'url'=>array('admin')),
);
?>

<h1>Enfermedad Condicions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

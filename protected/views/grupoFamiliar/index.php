<?php
$this->breadcrumbs=array(
	'Grupo Familiar',
);

$this->menu=array(
	array('label'=>'Agregar Familiar', 'url'=>array('create')),
	array('label'=>'Administrar Grupo Familiar', 'url'=>array('admin')),
);
?>

<h1>Grupo Familiar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

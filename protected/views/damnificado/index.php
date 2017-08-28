<?php
$this->breadcrumbs=array(
	'Representantes de Familia',
);

$this->menu=array(
	array('label'=>'Agregar Representante de Familia', 'url'=>array('create')),
	array('label'=>'Administrar Representantes de Familia', 'url'=>array('admin')),
);
?>

<h1>Representantes de Familia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

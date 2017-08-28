<?php
$this->breadcrumbs=array(
	'Representante Refugio',
);

$this->menu=array(
	array('label'=>'Crear Representante Refugio', 'url'=>array('create')),
	array('label'=>'Administrar Representante Refugio', 'url'=>array('admin')),
);
?>

<h1>Representante Refugio</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

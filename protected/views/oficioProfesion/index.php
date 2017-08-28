<?php
$this->breadcrumbs=array(
	'Oficio/Profesión',
);

$this->menu=array(
	array('label'=>'Crear Oficio/Profesión', 'url'=>array('create')),
	array('label'=>'Administrar Oficio/Profesión', 'url'=>array('admin')),
);
?>

<h1>Oficio/Profesión</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

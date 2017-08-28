<?php
$this->breadcrumbs=array(
	'Oficio/Profesión'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Oficio/Profesión', 'url'=>array('index')),
	array('label'=>'Administrar Oficio/Profesión', 'url'=>array('admin')),
);
?>

<h1>Crear Oficio/Profesi&oacute;n</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Representante Refugio'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Lista Representantes Refugios', 'url'=>array('index')),
	array('label'=>'Crear Representante Refugio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('coordinador-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Representante Refugio</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'coordinador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_coordinador',
		'cedula_coordinador',
		'nombre_coordinador',
		'tlf_coordinador',
		'correo',
		'id_refugio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

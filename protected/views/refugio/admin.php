<?php
$this->breadcrumbs=array(
	'Refugios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Refugio', 'url'=>array('index')),
	array('label'=>'Create Refugio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('refugio-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Refugios</h1>

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
	'id'=>'refugio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_refugio',
		'nombre_refugio',
		'direccion',
		'id_parroquia',
		'actividades_deportivas',
		'banho',
		/*
		'comision_de_cocina',
		'comision_de_limpieza',
		'dotacion_de_comida',
		'dotacion_de_medicamento',
		'dotacion_de_ropa',
		'duchas',
		'educacion',
		'enfemera',
		'medico',
		'pediatria',
		'recoleccion_de_basura',
		'recreador',
		'suministro_de_agua_potable',
		'transporte_publico',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

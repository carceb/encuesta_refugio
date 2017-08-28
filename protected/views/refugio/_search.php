<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_refugio'); ?>
		<?php echo $form->textField($model,'id_refugio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_refugio'); ?>
		<?php echo $form->textField($model,'nombre_refugio',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_parroquia'); ?>
		<?php echo $form->textField($model,'id_parroquia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actividades_deportivas'); ?>
		<?php echo $form->checkBox($model,'actividades_deportivas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banho'); ?>
		<?php echo $form->checkBox($model,'banho'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comision_de_cocina'); ?>
		<?php echo $form->checkBox($model,'comision_de_cocina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comision_de_limpieza'); ?>
		<?php echo $form->checkBox($model,'comision_de_limpieza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dotacion_de_comida'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_comida'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dotacion_de_medicamento'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_medicamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dotacion_de_ropa'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_ropa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duchas'); ?>
		<?php echo $form->checkBox($model,'duchas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'educacion'); ?>
		<?php echo $form->checkBox($model,'educacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enfemera'); ?>
		<?php echo $form->checkBox($model,'enfemera'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medico'); ?>
		<?php echo $form->checkBox($model,'medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pediatria'); ?>
		<?php echo $form->checkBox($model,'pediatria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recoleccion_de_basura'); ?>
		<?php echo $form->checkBox($model,'recoleccion_de_basura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recreador'); ?>
		<?php echo $form->checkBox($model,'recreador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suministro_de_agua_potable'); ?>
		<?php echo $form->checkBox($model,'suministro_de_agua_potable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transporte_publico'); ?>
		<?php echo $form->checkBox($model,'transporte_publico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_enfermedad_condicion'); ?>
		<?php echo $form->textField($model,'id_enfermedad_condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_enfermedad_condicion'); ?>
		<?php echo $form->textField($model,'nombre_enfermedad_condicion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
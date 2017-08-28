<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oficio-profesion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requiridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_oficio_profesion'); ?>
		<?php echo $form->textField($model,'nombre_oficio_profesion',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nombre_oficio_profesion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_coordinador'); ?>
		<?php echo $form->textField($model,'id_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_coordinador'); ?>
		<?php echo $form->textField($model,'cedula_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_coordinador'); ?>
		<?php echo $form->textField($model,'nombre_coordinador',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tlf_coordinador'); ?>
		<?php echo $form->textField($model,'tlf_coordinador',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_refugio'); ?>
		<?php echo $form->textField($model,'id_refugio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
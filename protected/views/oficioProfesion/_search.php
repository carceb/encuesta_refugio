<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_oficio_profesion'); ?>
		<?php echo $form->textField($model,'id_oficio_profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_oficio_profesion'); ?>
		<?php echo $form->textField($model,'nombre_oficio_profesion',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
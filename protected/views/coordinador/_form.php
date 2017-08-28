<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coordinador-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo Representante refugio'); ?>
		 <?php echo $form->dropDownList($model,'id_tipo_coordinador',CHtml::listData(TipoCoordinador::model()->findAll(),
                 'id_tipo_coordinador','nombre_tipo_coordinador')); ?>
		<?php echo $form->error($model,'id_tipo_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula Representante refugio'); ?>
		<?php echo $form->textField($model,'cedula_coordinador'); ?>
		<?php echo $form->error($model,'cedula_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre Representante refugio'); ?>
		<?php echo $form->textField($model,'nombre_coordinador',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nombre_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teléfono Representante refugio'); ?>
		<?php echo $form->textField($model,'tlf_coordinador',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'tlf_coordinador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo Representante refugio'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'refugio'); ?>
		 <?php echo $form->dropDownList($model,'id_refugio',CHtml::listData(Refugio::model()->findAll(),
                 'id_refugio','nombre_refugio')); ?>
		<?php echo $form->error($model,'id_refugio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
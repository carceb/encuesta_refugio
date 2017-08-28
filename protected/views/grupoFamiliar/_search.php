<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_grupo_familiar'); ?>
		<?php echo $form->textField($model,'id_grupo_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_damnificado'); ?>
		<?php echo $form->textField($model,'id_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_damnificado'); ?>
		<?php echo $form->textField($model,'cedula_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_familiar'); ?>
		<?php echo $form->textField($model,'nombre_familiar',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_familiar'); ?>
		<?php echo $form->textField($model,'apellido_familiar',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sexo'); ?>
		<?php echo $form->textField($model,'id_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_parentesco'); ?>
		<?php echo $form->textField($model,'id_parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nacionalidad'); ?>
		<?php echo $form->textField($model,'id_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_familiar'); ?>
		<?php echo $form->textField($model,'cedula_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento_familiar'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nivel_instruccion'); ?>
		<?php echo $form->textField($model,'id_nivel_instruccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_oficio_profesion'); ?>
		<?php echo $form->textField($model,'id_oficio_profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_trabajo'); ?>
		<?php echo $form->textField($model,'direccion_trabajo',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_escuela'); ?>
		<?php echo $form->textField($model,'direccion_escuela',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_enfermedad_condicion'); ?>
		<?php echo $form->textField($model,'id_enfermedad_condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil'); ?>
		<?php echo $form->textField($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_lugar_trabajo_familiar'); ?>
		<?php echo $form->textField($model,'nombre_lugar_trabajo_familiar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_lugar_estudio_familiar'); ?>
		<?php echo $form->textField($model,'nombre_lugar_estudio_familiar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_lugar_estudio_familiar'); ?>
		<?php echo $form->textField($model,'direccion_lugar_estudio_familiar',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad_familiar'); ?>
		<?php echo $form->textField($model,'edad_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_motora_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_motora_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_auditiva_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_auditiva_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_visual_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_visual_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_mental_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_mental_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_discapacidad_familiar'); ?>
		<?php echo $form->textField($model,'nombre_discapacidad_familiar',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_tratamiento_medico_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_tratamiento_medico_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_institucion_tratamiento_medico_familiar'); ?>
		<?php echo $form->textField($model,'nombre_institucion_tratamiento_medico_familiar',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_tratamiento_medico_familiar'); ?>
		<?php echo $form->textField($model,'descripcion_tratamiento_medico_familiar',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_consejo_comunal_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_consejo_comunal_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_consejo_comunal_familiar'); ?>
		<?php echo $form->textField($model,'nombre_consejo_comunal_familiar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_comite_comunal_familiar'); ?>
		<?php echo $form->textField($model,'nombre_comite_comunal_familiar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_articulacion_comunal_familiar'); ?>
		<?php echo $form->textField($model,'direccion_articulacion_comunal_familiar',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_ayuda_institucional_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_ayuda_institucional_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ayuda_institucional_familiar'); ?>
		<?php echo $form->textField($model,'nombre_ayuda_institucional_familiar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_ayuda_institucional_familiar'); ?>
		<?php echo $form->textField($model,'descripcion_ayuda_institucional_familiar',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
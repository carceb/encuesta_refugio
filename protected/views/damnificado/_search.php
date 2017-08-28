<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_damnificado'); ?>
		<?php echo $form->textField($model,'id_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_refugio'); ?>
		<?php echo $form->textField($model,'id_refugio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_parroquia'); ?>
		<?php echo $form->textField($model,'id_parroquia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_damnificado'); ?>
		<?php echo $form->textField($model,'nombre_damnificado',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_damnificado'); ?>
		<?php echo $form->textField($model,'apellido_damnificado',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sexo'); ?>
		<?php echo $form->textField($model,'id_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_nacionalidad'); ?>
		<?php echo $form->textField($model,'id_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_damnificado'); ?>
		<?php echo $form->textField($model,'cedula_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
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
		<?php echo $form->label($model,'id_forma_tenencia'); ?>
		<?php echo $form->textField($model,'id_forma_tenencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_vivienda'); ?>
		<?php echo $form->textField($model,'id_tipo_vivienda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_vivienda'); ?>
		<?php echo $form->textField($model,'direccion_vivienda',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_enfermedad_condicion'); ?>
		<?php echo $form->textField($model,'id_enfermedad_condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ingreso_refugio'); ?>
		<?php echo $form->textField($model,'fecha_ingreso_refugio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_estado_civil'); ?>
		<?php echo $form->textField($model,'id_estado_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otra_enfermedad'); ?>
		<?php echo $form->textField($model,'otra_enfermedad',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_refugio_procedencia'); ?>
		<?php echo $form->textField($model,'id_refugio_procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_electronico'); ?>
		<?php echo $form->textField($model,'correo_electronico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_lugar_trabajo'); ?>
		<?php echo $form->textField($model,'nombre_lugar_trabajo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_lugar_estudio'); ?>
		<?php echo $form->textField($model,'nombre_lugar_estudio',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_lugar_estudio'); ?>
		<?php echo $form->textField($model,'direccion_lugar_estudio',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edad_representante'); ?>
		<?php echo $form->textField($model,'edad_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_situacion_vivienda'); ?>
		<?php echo $form->textField($model,'id_situacion_vivienda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_motora'); ?>
		<?php echo $form->checkBox($model,'discapacidad_motora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_auditiva'); ?>
		<?php echo $form->checkBox($model,'discapacidad_auditiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_visual'); ?>
		<?php echo $form->checkBox($model,'discapacidad_visual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discapacidad_mental'); ?>
		<?php echo $form->checkBox($model,'discapacidad_mental'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_discapacidad'); ?>
		<?php echo $form->textField($model,'nombre_discapacidad',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_tratamiento_medico'); ?>
		<?php echo $form->checkBox($model,'indica_tratamiento_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_institucion_tratamiento_medico'); ?>
		<?php echo $form->textField($model,'nombre_institucion_tratamiento_medico',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_tratamiento_medico'); ?>
		<?php echo $form->textField($model,'descripcion_tratamiento_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_consejo_comunal'); ?>
		<?php echo $form->checkBox($model,'indica_consejo_comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_consejo_comunal'); ?>
		<?php echo $form->textField($model,'nombre_consejo_comunal',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_comite_comunal'); ?>
		<?php echo $form->textField($model,'nombre_comite_comunal',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_articulacion_comunal'); ?>
		<?php echo $form->textField($model,'direccion_articulacion_comunal',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indica_ayuda_institucional'); ?>
		<?php echo $form->checkBox($model,'indica_ayuda_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_ayuda_institucional'); ?>
		<?php echo $form->textField($model,'nombre_ayuda_institucional',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion_ayuda_institucional'); ?>
		<?php echo $form->textField($model,'descripcion_ayuda_institucional',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_motivo_desalojo'); ?>
		<?php echo $form->textField($model,'id_motivo_desalojo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
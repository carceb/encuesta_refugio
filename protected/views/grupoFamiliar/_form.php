<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grupo-familiar-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula representante de familia'); ?>
		<?php echo $form->textField($model,'cedula_damnificado'); ?>
		<?php echo $form->error($model,'cedula_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacionalidad familiar'); ?>
                <?php echo $form->dropDownList($model,'id_nacionalidad',CHtml::listData(Nacionalidad::model()->findAll(),
                 'id_nacionalidad','nombre_nacionalidad')); ?>
		<?php echo $form->error($model,'id_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula familiar'); ?>
                    <p>Si no posee cedula colocar cero</p>
		<?php echo $form->textField($model,'cedula_familiar'); ?>
		<?php echo $form->error($model,'cedula_familiar'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'nombre familiar'); ?>
		<?php echo $form->textField($model,'nombre_familiar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido familiar'); ?>
		<?php echo $form->textField($model,'apellido_familiar',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
                <?php echo $form->dropDownList($model,'id_sexo',CHtml::listData(Sexo::model()->findAll(),
                 'id_sexo','nombre_sexo')); ?>
		<?php echo $form->error($model,'id_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentesco'); ?>
                <?php echo $form->dropDownList($model,'id_parentesco',CHtml::listData(Parentesco::model()->findAll(),
                 'id_parentesco','nombre_parentesco')); ?>
		<?php echo $form->error($model,'id_parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento_familiar'); ?>
                    <p>año-mes-dia (ejemplo: 1980-12-30)</p>
		<?php echo CHtml::activeTextField($model,'fecha_nacimiento_familiar',array("id"=>"fecha_nacimiento_familiar")); ?>
                <?php echo CHtml::image("images/calendar-button.gif","calendar",
                array("id"=>"c_button_2","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'fecha_nacimiento_familiar',
                        'button'=>'c_button_2',
                        'ifFormat'=>'%Y-%m-%d',
                        'language'=>'es',
                    ));
                    ?>
		<?php echo $form->error($model,'fecha_nacimiento_familiar'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'edad_familiar'); ?>
		<?php echo $form->textField($model,'edad_familiar'); ?>
		<?php echo $form->error($model,'edad_familiar'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'estado civil'); ?>
                <?php echo $form->dropDownList($model,'id_estado_civil',CHtml::listData(EstadoCivil::model()->findAll(),
                 'id_estado_civil','nombre_estado_civil')); ?>
		<?php echo $form->error($model,'id_estado_civil'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'id_nivel_instruccion'); ?>
                <?php echo $form->dropDownList($model,'id_nivel_instruccion',CHtml::listData(NivelInstruccion::model()->findAll(),
                 'id_nivel_instruccion','nombre_nivel_instruccion')); ?>
		<?php echo $form->error($model,'id_nivel_instruccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oficio profesion'); ?>
                <?php echo $form->dropDownList($model,'id_oficio_profesion',CHtml::listData(OficioProfesion::model()->findAll(),
                 'id_oficio_profesion','nombre_oficio_profesion')); ?>
		<?php echo $form->error($model,'id_oficio_profesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_trabajo'); ?>
		<?php echo $form->textField($model,'direccion_trabajo',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'direccion_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_escuela'); ?>
		<?php echo $form->textField($model,'direccion_escuela',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'direccion_escuela'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enfermedad condicion'); ?>
                <?php echo $form->dropDownList($model,'id_enfermedad_condicion',CHtml::listData(EnfermedadCondicion::model()->findAll(),
                 'id_enfermedad_condicion','nombre_enfermedad_condicion')); ?>
		<?php echo $form->error($model,'id_enfermedad_condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Otra Enfermedad/Condicion'); ?>
       		<?php echo $form->textArea($model,'otra_enfermedad_condicion_familiar',array('rows'=>4, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otra_enfermedad_condicion_familiar'); ?>
	</div>
        
 	<div class="row">
		<?php echo $form->labelEx($model,'indica_tratamiento_medico_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_tratamiento_medico_familiar'); ?>
		<?php echo $form->error($model,'indica_tratamiento_medico_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_institucion_tratamiento_medico_familiar'); ?>
		<?php echo $form->textField($model,'nombre_institucion_tratamiento_medico_familiar',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nombre_institucion_tratamiento_medico_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_tratamiento_medico_familiar'); ?>
		<?php echo $form->textField($model,'descripcion_tratamiento_medico_familiar',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcion_tratamiento_medico_familiar'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'nombre_lugar_trabajo_familiar'); ?>
		<?php echo $form->textField($model,'nombre_lugar_trabajo_familiar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_lugar_trabajo_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_lugar_estudio_familiar'); ?>
		<?php echo $form->textField($model,'nombre_lugar_estudio_familiar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_lugar_estudio_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_lugar_estudio_familiar'); ?>
		<?php echo $form->textField($model,'direccion_lugar_estudio_familiar',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'direccion_lugar_estudio_familiar'); ?>
	</div>
        <div>
            <p>Indique si tiene alguna de estas discapacidades:</p>
        </div>
	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_motora_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_motora_familiar'); ?>
		<?php echo $form->error($model,'discapacidad_motora_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_auditiva_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_auditiva_familiar'); ?>
		<?php echo $form->error($model,'discapacidad_auditiva_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_visual_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_visual_familiar'); ?>
		<?php echo $form->error($model,'discapacidad_visual_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_mental_familiar'); ?>
		<?php echo $form->checkBox($model,'discapacidad_mental_familiar'); ?>
		<?php echo $form->error($model,'discapacidad_mental_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_discapacidad_familiar'); ?>
		<?php echo $form->textField($model,'nombre_discapacidad_familiar',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_discapacidad_familiar'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'indica_consejo_comunal_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_consejo_comunal_familiar'); ?>
		<?php echo $form->error($model,'indica_consejo_comunal_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_consejo_comunal_familiar'); ?>
		<?php echo $form->textField($model,'nombre_consejo_comunal_familiar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_consejo_comunal_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comite_comunal_familiar'); ?>
		<?php echo $form->textField($model,'nombre_comite_comunal_familiar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_comite_comunal_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_articulacion_comunal_familiar'); ?>
		<?php echo $form->textField($model,'direccion_articulacion_comunal_familiar',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'direccion_articulacion_comunal_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indica_ayuda_institucional_familiar'); ?>
		<?php echo $form->checkBox($model,'indica_ayuda_institucional_familiar'); ?>
		<?php echo $form->error($model,'indica_ayuda_institucional_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ayuda_institucional_familiar'); ?>
		<?php echo $form->textField($model,'nombre_ayuda_institucional_familiar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_ayuda_institucional_familiar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_ayuda_institucional_familiar'); ?>
		<?php echo $form->textField($model,'descripcion_ayuda_institucional_familiar',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcion_ayuda_institucional_familiar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'damnificado-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>


        <div class="row">
		<?php echo $form->labelEx($model,'refugio_procedencia'); ?>
                <?php echo $form->dropDownList($model,'id_refugio_procedencia',CHtml::listData(Refugio::model()->findAll(),
                 'id_refugio','nombre_refugio')); ?>
		<?php echo $form->error($model,'id_refugio_procedencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Refugio actual'); ?>
                <?php echo $form->dropDownList($model,'id_refugio',CHtml::listData(Refugio::model()->findAll(),
                 'id_refugio','nombre_refugio')); ?>
		<?php echo $form->error($model,'id_refugio'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso_refugio'); ?>
                    <p>año-mes-dia (ejemplo: 2010-11-15)</p>
                <?php echo CHtml::activeTextField($model,'fecha_ingreso_refugio',array("id"=>"fecha_ingreso_refugio")); ?>
                <?php echo CHtml::image("images/calendar-button.gif","calendar",
                array("id"=>"c_button_1","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'fecha_ingreso_refugio',
                        'button'=>'c_button_1',
                        'ifFormat'=>'%Y-%m-%d',
                        'language'=>'es',
                    ));
                    ?>
		<?php echo $form->error($model,'fecha_ingreso_refugio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_damnificado'); ?>
		<?php echo $form->textField($model,'nombre_damnificado',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_damnificado'); ?>
		<?php echo $form->textField($model,'apellido_damnificado',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sexo'); ?>
                <?php echo $form->dropDownList($model,'id_sexo',CHtml::listData(Sexo::model()->findAll(),
                 'id_sexo','nombre_sexo')); ?>
		<?php echo $form->error($model,'id_sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nacionalidad'); ?>
                <?php echo $form->dropDownList($model,'id_nacionalidad',CHtml::listData(Nacionalidad::model()->findAll(),
                 'id_nacionalidad','nombre_nacionalidad')); ?>
		<?php echo $form->error($model,'id_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_damnificado'); ?>
		<?php echo $form->textField($model,'cedula_damnificado'); ?>
		<?php echo $form->error($model,'cedula_damnificado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estado_civil'); ?>
		<?php echo $form->dropDownList($model,'id_estado_civil',CHtml::listData(EstadoCivil::model()->findAll(),
                 'id_estado_civil','nombre_estado_civil')); ?>
		<?php echo $form->error($model,'id_estado_civil'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
                    <p>año-mes-dia (ejemplo: 1980-12-30)</p>
		<?php echo CHtml::activeTextField($model,'fecha_nacimiento',array("id"=>"fecha_nacimiento")); ?>
                <?php echo CHtml::image("images/calendar-button.gif","calendar",
                array("id"=>"c_button_2","class"=>"pointer")); ?>
                    <?php $this->widget('application.extensions.calendar.SCalendar',
                        array(
                        'inputField'=>'fecha_nacimiento',
                        'button'=>'c_button_2',
                        'ifFormat'=>'%Y-%m-%d',
                        'language'=>'es',
                    ));
                    ?>
        	<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad_representante'); ?>
		<?php echo $form->textField($model,'edad_representante'); ?>
		<?php echo $form->error($model,'edad_representante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nivel_instruccion'); ?>
                <?php echo $form->dropDownList($model,'id_nivel_instruccion',CHtml::listData(NivelInstruccion::model()->findAll(),
                 'id_nivel_instruccion','nombre_nivel_instruccion')); ?>
		<?php echo $form->error($model,'id_nivel_instruccion'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'nombre_lugar_estudio'); ?>
		<?php echo $form->textField($model,'nombre_lugar_estudio',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_lugar_estudio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_lugar_estudio'); ?>
		<?php echo $form->textArea($model,'direccion_lugar_estudio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion_lugar_estudio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_oficio_profesion'); ?>
                <?php echo $form->dropDownList($model,'id_oficio_profesion',CHtml::listData(OficioProfesion::model()->findAll(),
                 'id_oficio_profesion','nombre_oficio_profesion')); ?>
		<?php echo $form->error($model,'id_oficio_profesion'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'nombre_lugar_trabajo'); ?>
		<?php echo $form->textField($model,'nombre_lugar_trabajo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre_lugar_trabajo'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'direccion_trabajo'); ?>
		<?php echo $form->textArea($model,'direccion_trabajo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion_trabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_electronico'); ?>
		<?php echo $form->textField($model,'correo_electronico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'correo_electronico'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Parroquia de la Vivienda'); ?>
                <?php echo $form->dropDownList($model,'id_parroquia',CHtml::listData(Parroquia::model()->findAll(),
                 'id_parroquia','nombre_parroquia')); ?>
		<?php echo $form->error($model,'id_parroquia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_forma_tenencia'); ?>
                <?php echo $form->dropDownList($model,'id_forma_tenencia',CHtml::listData(FormaTenencia::model()->findAll(),
                 'id_forma_tenencia','nombre_forma_tenencia')); ?>
		<?php echo $form->error($model,'id_forma_tenencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_vivienda'); ?>
		<?php echo $form->dropDownList($model,'id_tipo_vivienda',CHtml::listData(TipoVivienda::model()->findAll(),
                 'id_tipo_vivienda','nombre_tipo_vivienda')); ?>
		<?php echo $form->error($model,'id_tipo_vivienda'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'id_situacion_vivienda'); ?>
		<?php echo $form->dropDownList($model,'id_situacion_vivienda',CHtml::listData(SituacionVivienda::model()->findAll(),
                 'id_situacion_vivienda','nombre_situacion_vivienda')); ?>
		<?php echo $form->error($model,'id_situacion_vivienda'); ?>
	</div>

        
	<div class="row">
		<?php echo $form->labelEx($model,'direccion_vivienda'); ?>
		<?php echo $form->textArea($model,'direccion_vivienda',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion_vivienda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_enfermedad_condicion'); ?>
		<?php echo $form->dropDownList($model,'id_enfermedad_condicion',CHtml::listData(EnfermedadCondicion::model()->findAll(),
                 'id_enfermedad_condicion','nombre_enfermedad_condicion')); ?>
		<?php echo $form->error($model,'id_enfermedad_condicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otra_enfermedad'); ?>
		<?php echo $form->textArea($model,'otra_enfermedad',array('rows'=>4, 'cols'=>50)); ?>
		<?php echo $form->error($model,'otra_enfermedad'); ?>
	</div>
        <div>
            <p>Indique si tiene alguna de estas discapacidades:</p>
        </div>
	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_motora'); ?>
		<?php echo $form->checkBox($model,'discapacidad_motora'); ?>
		<?php echo $form->error($model,'discapacidad_motora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_auditiva'); ?>
		<?php echo $form->checkBox($model,'discapacidad_auditiva'); ?>
		<?php echo $form->error($model,'discapacidad_auditiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_visual'); ?>
		<?php echo $form->checkBox($model,'discapacidad_visual'); ?>
		<?php echo $form->error($model,'discapacidad_visual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discapacidad_mental'); ?>
		<?php echo $form->checkBox($model,'discapacidad_mental'); ?>
		<?php echo $form->error($model,'discapacidad_mental'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_discapacidad'); ?>
		<?php echo $form->textField($model,'nombre_discapacidad',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre_discapacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Indique si tiene tratamiento medico'); ?>
		<?php echo $form->checkBox($model,'indica_tratamiento_medico'); ?>
		<?php echo $form->error($model,'indica_tratamiento_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_institucion_tratamiento_medico'); ?>
		<?php echo $form->textField($model,'nombre_institucion_tratamiento_medico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_institucion_tratamiento_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_tratamiento_medico'); ?>
		<?php echo $form->textArea($model,'descripcion_tratamiento_medico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_tratamiento_medico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indica_consejo_comunal'); ?>
		<?php echo $form->checkBox($model,'indica_consejo_comunal'); ?>
		<?php echo $form->error($model,'indica_consejo_comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_consejo_comunal'); ?>
		<?php echo $form->textField($model,'nombre_consejo_comunal',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_consejo_comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_comite_comunal'); ?>
		<?php echo $form->textField($model,'nombre_comite_comunal',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_comite_comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_articulacion_comunal'); ?>
		<?php echo $form->textArea($model,'direccion_articulacion_comunal',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion_articulacion_comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indica_ayuda_institucional'); ?>
		<?php echo $form->checkBox($model,'indica_ayuda_institucional'); ?>
		<?php echo $form->error($model,'indica_ayuda_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_ayuda_institucional'); ?>
		<?php echo $form->textField($model,'nombre_ayuda_institucional',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_ayuda_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion_ayuda_institucional'); ?>
		<?php echo $form->textArea($model,'descripcion_ayuda_institucional',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion_ayuda_institucional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_motivo_desalojo'); ?>
		<?php echo $form->dropDownList($model,'id_motivo_desalojo',CHtml::listData(MotivoDesalojo::model()->findAll(),
                 'id_motivo_desalojo','nombre_motivo_desalojo')); ?>
		<?php echo $form->error($model,'id_motivo_desalojo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
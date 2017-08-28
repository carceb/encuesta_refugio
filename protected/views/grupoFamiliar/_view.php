<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_grupo_familiar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_grupo_familiar), array('view', 'id'=>$data->id_grupo_familiar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_representante de familia')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_damnificado); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_representante de familia')); ?>:</b>
	<?php echo CHtml::encode($data->cedulaDamnificado0->nombre_damnificado).' '.$data->cedulaDamnificado0->apellido_damnificado; ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sexo')); ?>:</b>
	<?php echo CHtml::encode($data->idSexo0->nombre_sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->idParentesco0->nombre_parentesco); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->id_nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nivel_instruccion')); ?>:</b>
	<?php echo CHtml::encode($data->id_nivel_instruccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_oficio_profesion')); ?>:</b>
	<?php echo CHtml::encode($data->id_oficio_profesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_escuela')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_escuela); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enfermedad_condicion')); ?>:</b>
	<?php echo CHtml::encode($data->id_enfermedad_condicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_lugar_trabajo_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_lugar_trabajo_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_lugar_estudio_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_lugar_estudio_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_lugar_estudio_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_lugar_estudio_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->edad_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_motora_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_motora_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_auditiva_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_auditiva_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_visual_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_visual_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_mental_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_mental_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_discapacidad_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_discapacidad_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_tratamiento_medico_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->indica_tratamiento_medico_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_institucion_tratamiento_medico_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_institucion_tratamiento_medico_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_tratamiento_medico_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_tratamiento_medico_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_consejo_comunal_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->indica_consejo_comunal_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_consejo_comunal_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_consejo_comunal_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comite_comunal_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comite_comunal_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_articulacion_comunal_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_articulacion_comunal_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_ayuda_institucional_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->indica_ayuda_institucional_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ayuda_institucional_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ayuda_institucional_familiar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_ayuda_institucional_familiar')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_ayuda_institucional_familiar); ?>
	<br />

	*/ ?>

</div>
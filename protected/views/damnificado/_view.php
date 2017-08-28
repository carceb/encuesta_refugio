<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_damnificado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_damnificado), array('view', 'id'=>$data->id_damnificado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_refugio')); ?>:</b>
	<?php echo CHtml::encode($data->idRefugio0->nombre_refugio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->idParroquia0->nombre_parroquia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_damnificado')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_damnificado); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_damnificado')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_damnificado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_damnificado')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_damnificado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sexo')); ?>:</b>
	<?php echo CHtml::encode($data->idSexo0->nombre_sexo); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_forma_tenencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_forma_tenencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_vivienda')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_vivienda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_vivienda')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_vivienda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enfermedad_condicion')); ?>:</b>
	<?php echo CHtml::encode($data->id_enfermedad_condicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso_refugio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso_refugio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estado_civil')); ?>:</b>
	<?php echo CHtml::encode($data->id_estado_civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otra_enfermedad')); ?>:</b>
	<?php echo CHtml::encode($data->otra_enfermedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_refugio_procedencia')); ?>:</b>
	<?php echo CHtml::encode($data->id_refugio_procedencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_electronico')); ?>:</b>
	<?php echo CHtml::encode($data->correo_electronico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_lugar_trabajo')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_lugar_trabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_lugar_estudio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_lugar_estudio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_lugar_estudio')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_lugar_estudio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad_representante')); ?>:</b>
	<?php echo CHtml::encode($data->edad_representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_situacion_vivienda')); ?>:</b>
	<?php echo CHtml::encode($data->id_situacion_vivienda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_motora')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_motora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_auditiva')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_auditiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_visual')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_visual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discapacidad_mental')); ?>:</b>
	<?php echo CHtml::encode($data->discapacidad_mental); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_discapacidad')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_discapacidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_tratamiento_medico')); ?>:</b>
	<?php echo CHtml::encode($data->indica_tratamiento_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_institucion_tratamiento_medico')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_institucion_tratamiento_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_tratamiento_medico')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_tratamiento_medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_consejo_comunal')); ?>:</b>
	<?php echo CHtml::encode($data->indica_consejo_comunal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_consejo_comunal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_consejo_comunal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_comite_comunal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_comite_comunal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_articulacion_comunal')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_articulacion_comunal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indica_ayuda_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->indica_ayuda_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_ayuda_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_ayuda_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_ayuda_institucional')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_ayuda_institucional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_motivo_desalojo')); ?>:</b>
	<?php echo CHtml::encode($data->id_motivo_desalojo); ?>
	<br />

	*/ ?>

</div>
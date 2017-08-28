<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_refugio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_refugio), array('view', 'id'=>$data->id_refugio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_refugio')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_refugio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parroquia')); ?>:</b>
	<?php echo CHtml::encode($data->idParroquia0->nombre_parroquia); ?>
	<br />


	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comision_de_limpieza')); ?>:</b>
	<?php echo CHtml::encode($data->comision_de_limpieza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dotacion_de_comida')); ?>:</b>
	<?php echo CHtml::encode($data->dotacion_de_comida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dotacion_de_medicamento')); ?>:</b>
	<?php echo CHtml::encode($data->dotacion_de_medicamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dotacion_de_ropa')); ?>:</b>
	<?php echo CHtml::encode($data->dotacion_de_ropa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duchas')); ?>:</b>
	<?php echo CHtml::encode($data->duchas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('educacion')); ?>:</b>
	<?php echo CHtml::encode($data->educacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfemera')); ?>:</b>
	<?php echo CHtml::encode($data->enfemera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medico')); ?>:</b>
	<?php echo CHtml::encode($data->medico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pediatria')); ?>:</b>
	<?php echo CHtml::encode($data->pediatria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recoleccion_de_basura')); ?>:</b>
	<?php echo CHtml::encode($data->recoleccion_de_basura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recreador')); ?>:</b>
	<?php echo CHtml::encode($data->recreador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suministro_de_agua_potable')); ?>:</b>
	<?php echo CHtml::encode($data->suministro_de_agua_potable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transporte_publico')); ?>:</b>
	<?php echo CHtml::encode($data->transporte_publico); ?>
	<br />

	*/ ?>

</div>
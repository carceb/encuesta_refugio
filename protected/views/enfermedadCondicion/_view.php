<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_enfermedad_condicion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_enfermedad_condicion), array('view', 'id'=>$data->id_enfermedad_condicion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_enfermedad_condicion')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_enfermedad_condicion); ?>
	<br />


</div>
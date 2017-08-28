<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_coordinador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_coordinador), array('view', 'id'=>$data->id_coordinador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_coordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_coordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefóno')); ?>:</b>
	<?php echo CHtml::encode($data->tlf_coordinador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('refugio')); ?>:</b>
	<?php echo CHtml::encode($data->idRefugio0->nombre_refugio); ?>
	<br />


</div>
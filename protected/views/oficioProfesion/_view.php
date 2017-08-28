<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_oficio_profesion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_oficio_profesion), array('view', 'id'=>$data->id_oficio_profesion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_oficio_profesion')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_oficio_profesion); ?>
	<br />


</div>
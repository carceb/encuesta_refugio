<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'refugio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_refugio'); ?>
		<?php echo $form->textField($model,'nombre_refugio',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nombre_refugio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textArea($model,'direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parroquia'); ?>
               <?php echo $form->dropDownList($model,'id_parroquia',CHtml::listData(Parroquia::model()->findAll(),
                 'id_parroquia','nombre_parroquia')); ?>
		<?php echo $form->error($model,'id_parroquia'); ?>
	</div>
        <table width="20%">
           <tr>
                  <td width="33%"><?php echo $form->error($model,'actividades_deportivas'); ?><?php echo $form->labelEx($model,'actividades_deportivas'); ?><?php echo $form->checkBox($model,'actividades_deportivas'); ?></td>
                  <td width="33%"><?php echo $form->error($model,'banho'); ?><?php echo $form->labelEx($model,'baño'); ?><?php echo $form->checkBox($model,'banho'); ?></td>
                  <td><?php echo $form->error($model,'comision_de_cocina'); ?><?php echo $form->labelEx($model,'comision_de_cocina'); ?><?php echo $form->checkBox($model,'comision_de_cocina'); ?></td>
            </tr>
            
            <tr>
                  <td><?php echo $form->labelEx($model,'comision_de_limpieza'); ?>
		<?php echo $form->checkBox($model,'comision_de_limpieza'); ?>
		<?php echo $form->error($model,'comision_de_limpieza'); ?></td>
                  <td><?php echo $form->labelEx($model,'dotacion_de_comida'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_comida'); ?>
		<?php echo $form->error($model,'dotacion_de_comida'); ?></td>
                  <td><?php echo $form->labelEx($model,'dotacion_de_medicamento'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_medicamento'); ?>
		<?php echo $form->error($model,'dotacion_de_medicamento'); ?></td>
            </tr>

            <tr>
                  <td><?php echo $form->labelEx($model,'dotacion_de_ropa'); ?>
		<?php echo $form->checkBox($model,'dotacion_de_ropa'); ?>
		<?php echo $form->error($model,'dotacion_de_ropa'); ?></td>
                  <td><?php echo $form->labelEx($model,'duchas'); ?>
		<?php echo $form->checkBox($model,'duchas'); ?>
		<?php echo $form->error($model,'duchas'); ?></td>
                  <td><?php echo $form->labelEx($model,'educacion'); ?>
		<?php echo $form->checkBox($model,'educacion'); ?>
		<?php echo $form->error($model,'educacion'); ?></td>
            </tr>

            <tr>
                  <td><?php echo $form->labelEx($model,'enfemera'); ?>
		<?php echo $form->checkBox($model,'enfemera'); ?>
		<?php echo $form->error($model,'enfemera'); ?></td>
                  <td><?php echo $form->labelEx($model,'medico'); ?>
		<?php echo $form->checkBox($model,'medico'); ?>
		<?php echo $form->error($model,'medico'); ?></td>
                  <td><?php echo $form->labelEx($model,'pediatria'); ?>
		<?php echo $form->checkBox($model,'pediatria'); ?>
		<?php echo $form->error($model,'pediatria'); ?></td>
            </tr>

            <tr>
                  <td><?php echo $form->labelEx($model,'recoleccion_de_basura'); ?>
		<?php echo $form->checkBox($model,'recoleccion_de_basura'); ?>
		<?php echo $form->error($model,'recoleccion_de_basura'); ?></td>
                  <td><?php echo $form->labelEx($model,'recreador'); ?>
		<?php echo $form->checkBox($model,'recreador'); ?>
		<?php echo $form->error($model,'recreador'); ?></td>
                  <td><?php echo $form->labelEx($model,'suministro_de_agua_potable'); ?>
		<?php echo $form->checkBox($model,'suministro_de_agua_potable'); ?>
		<?php echo $form->error($model,'suministro_de_agua_potable'); ?></td>
            </tr>

            <tr>
                  <td><?php echo $form->labelEx($model,'transporte_publico'); ?>
		<?php echo $form->checkBox($model,'transporte_publico'); ?>
		<?php echo $form->error($model,'transporte_publico'); ?></td>
                  <td></td>
                  <td></td>
            </tr>

        </table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
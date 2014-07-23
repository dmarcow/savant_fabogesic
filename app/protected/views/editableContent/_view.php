<?php
/* @var $this EditableContentController */
/* @var $data EditableContent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homeA1')); ?>:</b>
	<?php echo CHtml::encode($data->homeA1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presentacionesA1')); ?>:</b>
	<?php echo CHtml::encode($data->presentacionesA1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />


</div>
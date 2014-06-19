<?php
/* @var $this DoloresCabezaController */
/* @var $data DoloresCabeza */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subtitle')); ?>:</b>
	<?php echo CHtml::encode($data->Subtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</b>
	<?php echo CHtml::encode($data->Text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text2')); ?>:</b>
	<?php echo CHtml::encode($data->Text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text3')); ?>:</b>
	<?php echo CHtml::encode($data->Text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text4')); ?>:</b>
	<?php echo CHtml::encode($data->Text4); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this QueEsIbuprofenoController */
/* @var $data QueEsIbuprofeno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubTitle')); ?>:</b>
	<?php echo CHtml::encode($data->SubTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</b>
	<?php echo CHtml::encode($data->Text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text2')); ?>:</b>
	<?php echo CHtml::encode($data->Text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image1Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image1Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image2Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image2Url); ?>
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
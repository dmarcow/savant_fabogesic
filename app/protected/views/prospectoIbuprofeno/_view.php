<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $data ProspectoIbuprofeno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subtitle')); ?>:</b>
	<?php echo CHtml::encode($data->Subtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</b>
	<?php echo CHtml::encode($data->Text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextIcon1')); ?>:</b>
	<?php echo CHtml::encode($data->TextIcon1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon1Url')); ?>:</b>
	<?php echo CHtml::encode($data->ImageIcon1Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextIcon2')); ?>:</b>
	<?php echo CHtml::encode($data->TextIcon2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon2Url')); ?>:</b>
	<?php echo CHtml::encode($data->ImageIcon2Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextIcon3')); ?>:</b>
	<?php echo CHtml::encode($data->TextIcon3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon3Url')); ?>:</b>
	<?php echo CHtml::encode($data->ImageIcon3Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TextIcon4')); ?>:</b>
	<?php echo CHtml::encode($data->TextIcon4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon4Url')); ?>:</b>
	<?php echo CHtml::encode($data->ImageIcon4Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GraphicImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->GraphicImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />

	*/ ?>

</div>
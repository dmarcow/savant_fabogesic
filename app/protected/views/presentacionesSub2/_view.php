<?php
/* @var $this PresentacionesSub2Controller */
/* @var $data PresentacionesSub2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub1ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1Text')); ?>:</b>
	<?php echo CHtml::encode($data->Sub1Text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub1Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub2ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2Text')); ?>:</b>
	<?php echo CHtml::encode($data->Sub2Text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub2Link); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub3ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3Text')); ?>:</b>
	<?php echo CHtml::encode($data->Sub3Text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub3Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModifcacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModifcacion); ?>
	<br />

	*/ ?>

</div>
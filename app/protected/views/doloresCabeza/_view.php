<?php
/* @var $this DoloresCabezaController */
/* @var $data DoloresCabeza */
?>

<div class="view">

  <h4>Imágenes</h4>
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageUrl) ?>" width="80px" height="auto"></dd>
  </dl>

  <hr/>
  <h4>Textos</h4>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Subtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Subtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text4')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text4); ?></dd>
  </dl>  

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />
	*/ ?>

</div>
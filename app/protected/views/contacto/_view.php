<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

  <h4>Imágenes</h4>
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageUrl) ?>" width="80px" height="auto"></dd>
  </dl>  

  <hr/>
  <h4>Textos</h4>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Title); ?></dd>
  </dl>    

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />-->


</div>
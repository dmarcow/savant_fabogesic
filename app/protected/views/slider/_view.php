<?php
/* @var $this SliderController */
/* @var $data Slider */
?>

<div class="view">

  <a name="<?php echo CHtml::encode($data->id) ?>"><h4>Slider</h4></a>
  
  <dl class="dl-horizontal">
	  <dt><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</dt>
	  <dd><?php echo CHtml::encode($data->id); ?></dd>
  </dl>    
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->baseUrl . '/upload/images/slides/' . CHtml::encode($data->ImageUrl) ?>" width="250px" height="auto"></dd>
  </dl>  
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('LinkUrl')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->LinkUrl); ?></dd>
  </dl>    

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />-->
    <b><?php echo CHtml::link(CHtml::encode('Modificar'), array('update', 'id'=>$data->id)); ?></b>

</div>
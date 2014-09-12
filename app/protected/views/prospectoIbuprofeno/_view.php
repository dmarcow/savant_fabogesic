<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $data ProspectoIbuprofeno */
?>

<div class="view">

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

  <h4>Imágenes</h4>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon1Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageIcon1Url) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon2Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageIcon2Url) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon3Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageIcon3Url) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageIcon4Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageIcon4Url) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('GraphicImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->GraphicImageUrl) ?>" width="80px" height="auto"></dd>   
  </dl>

  <hr/>
  <h4>Textos</h4>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Title); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Subtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Subtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('TextIcon1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->TextIcon1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('TextIcon2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->TextIcon2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('TextIcon3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->TextIcon3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('TextIcon4')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->TextIcon4); ?></dd>    
  </dl>
  
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
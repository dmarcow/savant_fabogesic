<?php
/* @var $this PresentacionesSub1Controller */
/* @var $data PresentacionesSub1 */
?>

<div class="view">

	<!-- <h2><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>: <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></h2> -->

	<h4>400mg</h4>

	<dl class="dl-horizontal">
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1ImageUrl')); ?>:</dt>
      <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Sub1ImageUrl) ?>" width="80px" height="auto"></dd>
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1Text')); ?>:</dt>
      <dd><?php echo $data->Sub1Text; ?></dd>
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub2Text')); ?>:</dt>
      <dd><?php echo $data->Sub2Text; ?></dd>

      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub3Text')); ?>:</dt>
      <dd><?php echo $data->Sub3Text; ?></dd>
    
    </dl>

	<hr />
    <h4>600mg</h4>

	<dl class="dl-horizontal">
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub4ImageUrl')); ?>:</dt>
      <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Sub4ImageUrl) ?>" width="80px" height="auto"></dd>
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub4Text')); ?>:</dt>
      <dd><?php echo $data->Sub4Text; ?></dd>
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub5Text')); ?>:</dt>
      <dd><?php echo $data->Sub5Text; ?></dd>
    
    </dl>

	<hr />
    <h4>Prospectos</h4>

	<dl class="dl-horizontal">
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1Link')); ?>:</dt>
      <dd><?php echo $data->Sub1Link; ?></dd>
      
      <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub4Link')); ?>:</dt>
      <dd><?php echo $data->Sub4Link; ?></dd>
    
    </dl>








	<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub1ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1Text')); ?>:</b>
	<?php echo $data->Sub1Text; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub1Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub1Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub2ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2Text')); ?>:</b>
	<?php echo $data->Sub2Text; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub2Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub2Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub3ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3Text')); ?>:</b>
	<?php echo $data->Sub3Text; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub3Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub3Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub4ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub4ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub4Text')); ?>:</b>
	<?php echo $data->Sub4Text; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub4Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub4Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub5ImageUrl')); ?>:</b>
	<?php echo CHtml::encode($data->Sub5ImageUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub5Text')); ?>:</b>
	<?php echo $data->Sub5Text; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sub5Link')); ?>:</b>
	<?php echo CHtml::encode($data->Sub5Link); ?>
	<br />
	 -->


</div>
<?php
/* @var $this UsosMasFrecuentesController */
/* @var $data UsosMasFrecuentes */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

    <h4>Imágenes</h4>

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image1Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image1Url) ?>" width="80px" height="auto"></dd>
    </dl>  

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image2Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image2Url) ?>" width="80px" height="auto"></dd>
    </dl>  
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image3Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image3Url) ?>" width="80px" height="auto"></dd>
    </dl>  
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image4Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image4Url) ?>" width="80px" height="auto"></dd>
    </dl>  

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image5Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image5Url) ?>" width="80px" height="auto"></dd>
    </dl>    
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Image6Url')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image6Url) ?>" width="80px" height="auto"></dd>
    </dl>  

    <hr />
    <h4>Textos</h4>

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Text1); ?></dd>
    </dl>  
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Text2')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Text2); ?></dd>
    </dl>
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Text3')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Text3); ?></dd>
    </dl>
  
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Text4')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Text4); ?></dd>
    </dl>

<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Image1Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image1Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text1')); ?>:</b>
	<?php echo CHtml::encode($data->Text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image2Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image2Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text2')); ?>:</b>
	<?php echo CHtml::encode($data->Text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image3Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image3Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text3')); ?>:</b>
	<?php echo CHtml::encode($data->Text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image4Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image4Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text4')); ?>:</b>
	<?php echo CHtml::encode($data->Text4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image5Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image5Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text5')); ?>:</b>
	<?php echo CHtml::encode($data->Text5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image6Url')); ?>:</b>
	<?php echo CHtml::encode($data->Image6Url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Text6')); ?>:</b>
	<?php echo CHtml::encode($data->Text6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaCreacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaCreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FechaModificacion')); ?>:</b>
	<?php echo CHtml::encode($data->FechaModificacion); ?>
	<br />
*/
?>

</div>
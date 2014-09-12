<?php
/* @var $this HomeBoxesController */
/* @var $data HomeBoxes */
?>

<div class="view">

    <a name="<?php echo CHtml::encode($data->Id) ?>"><h4>Home Box</h4></a>

    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->Id); ?></dd>
	</dl>
    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->Title); ?></dd>
	</dl>
    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->Text); ?></dd>
	</dl>
    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('ButtonText')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->ButtonText); ?></dd>
	</dl>
    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('ButtonClass')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->ButtonClass); ?></dd>
	</dl>
    <dl class="dl-horizontal">
	    <dt><?php echo CHtml::encode($data->getAttributeLabel('ButtonLink')); ?>:</dt>
	    <dd><?php echo CHtml::encode($data->ButtonLink); ?></dd>
	</dl>
<?php
    if(!empty($data->ImageUrl)):
?>
    <dl class="dl-horizontal">
      <dt><?php echo CHtml::encode($data->getAttributeLabel('ImageUrl')); ?>:</dt>
      <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ImageUrl) ?>" width="250px" height="auto"></dd>
    </dl>
<?php
    endif
?>      
    <b><?php echo CHtml::link(CHtml::encode('Modificar'), array('update', 'id'=>$data->Id)); ?></b>
</div>
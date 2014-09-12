<?php
/* @var $this PresentacionesSub4Controller */
/* @var $data PresentacionesSub4 */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
s
    <h4>400mg</h4>
    
    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1ImageUrl')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Sub1ImageUrl) ?>" width="80px" height="auto"></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1Text')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Sub1Text); ?></dd>
    </dl>

	<hr />

    <h4>600mg</h4>

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub2ImageUrl')); ?>:</dt>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Sub2ImageUrl) ?>" width="80px" height="auto"></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub2Text')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Sub2Text); ?></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub3Text')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Sub3Text); ?></dd>
        <dt></dt>
        <dd></dd>

    </dl>

    <hr />

    <h4>Prospectos</h4>

    <dl class="dl-horizontal">
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub2Link')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Sub2Link); ?></dd>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . $data->Sub2Link; ?>" width="80px" height="auto"></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Prospecto')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Prospecto); ?></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Sub1Link')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Sub1Link); ?></dd>
        <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . CHtml::encode($data->Sub1Link) ?>" width="80px" height="auto"></dd>
        <dt><?php echo CHtml::encode($data->getAttributeLabel('Prospecto2')); ?>:</dt>
        <dd><?php echo CHtml::encode($data->Prospecto2); ?></dd>
    </dl>
</div>
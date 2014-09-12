<?php
/* @var $this DoloresController */
/* @var $data Dolores */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

  <h4>Imágenes</h4>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MuscularesImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->MuscularesImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('PosturalesImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->PosturalesImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->MenstrualesImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesSub2ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->MenstrualesSub2ImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->ArticularesImageUrl) ?>" width="80px" height="auto"></dd>       
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->NinosImageUrl) ?>" width="80px" height="auto"></dd>       
  </dl>

  <hr/>
  <h4>Textos</h4>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MuscularesSubtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MuscularesSubtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MuscularesSub1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MuscularesSub1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('PostularesSubtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->PostularesSubtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('PostularesSub1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->PostularesSub1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('PostularesSub2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->PostularesSub2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('PostularesSub3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->PostularesSub3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesSubtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MenstrualesSubtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesSub1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MenstrualesSub1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesSub2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MenstrualesSub2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('MenstrualesSub3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->MenstrualesSub3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSubtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSubtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSub1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSub1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSub2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSub2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSub3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSub3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSub4')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSub4); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('ArticularesSub5')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->ArticularesSub5); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosSubtitle')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->NinosSubtitle); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosSub1')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->NinosSub1); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosSub2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->NinosSub2); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosSub3')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->NinosSub3); ?></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('NinosSub4')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->NinosSub4); ?></dd>
  </dl>
</div>
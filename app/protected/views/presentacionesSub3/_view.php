<?php
/* @var $this PresentacionesSub3Controller */
/* @var $data PresentacionesSub3 */
?>

<div class="view">

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
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
  
    <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Image7Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image7Url) ?>" width="80px" height="auto"></dd>
  </dl>  
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Image8Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image8Url) ?>" width="80px" height="auto"></dd>
  </dl>  
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Image9Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image9Url) ?>" width="80px" height="auto"></dd>
  </dl>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Image10Url')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->Image10Url) ?>" width="80px" height="auto"></dd>
  </dl>

  <hr />
  <h4>Botones</h4>
  
  <dl class="dl-horizontal">
    <dt>
    <?php echo CHtml::encode($data->getAttributeLabel('BtnImageUrl1')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->BtnImageUrl1) ?>" width="80px" height="auto"></dd>
  </dl>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('BtnImageUrl2')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . CHtml::encode($data->BtnImageUrl2) ?>" width="80px" height="auto"></dd>
  </dl>

  <hr />
  <h4>Prospectos</h4>  
  
  <dl class="dl-horizontal">
    <dt>
    <?php echo CHtml::encode($data->getAttributeLabel('Prospecto1ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . CHtml::encode($data->Prospecto1ImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Prospecto')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Prospecto); ?></dd>
  </dl>

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Prospecto2ImageUrl')); ?>:</dt>
    <dd><img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . CHtml::encode($data->Prospecto2ImageUrl) ?>" width="80px" height="auto"></dd>
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Prospecto2')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Prospecto2); ?></dd>
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
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text5')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text5); ?></dd>
  </dl>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text6')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text6); ?></dd>
  </dl>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text9')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text9); ?></dd>
  </dl>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text10')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text10); ?></dd>
  </dl>  

  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text11')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text11); ?></dd>
  </dl>  
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text12')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text12); ?></dd>
  </dl>
  
  <dl class="dl-horizontal">
    <dt><?php echo CHtml::encode($data->getAttributeLabel('Text13')); ?>:</dt>
    <dd><?php echo CHtml::encode($data->Text13); ?></dd>
  </dl>

</div>
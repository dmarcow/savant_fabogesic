<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-form',
   	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php if ($model->isNewRecord != '1') { ?>
      <div class="row imageWrapper">
        <?php echo CHtml::image(Yii::app()->request->baseUrl . '/' . SLIDE_IMAGES_PATH . $model->ImageUrl, "ImageUrl", array("width" => 250)); ?>  
      </div>
    <?php } ?>
    
    <div class="row">
      <?php echo $form->labelEx($model, 'ImageUrl'); ?>
      <?php echo CHtml::activeFileField($model, 'ImageUrl'); ?>  
      <?php echo $form->error($model, 'ImageUrl'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'LinkUrl'); ?>
		<?php echo $form->textField($model,'LinkUrl',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'LinkUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
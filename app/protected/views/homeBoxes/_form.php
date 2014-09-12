<?php
/* @var $this HomeBoxesController */
/* @var $model HomeBoxes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'home-boxes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype'=>'multipart/form-data'),  
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text'); ?>
		<?php echo $form->textArea($model,'Text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ButtonText'); ?>
		<?php echo $form->textField($model,'ButtonText',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ButtonText'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ButtonClass'); ?>
		<?php echo $form->textField($model,'ButtonClass',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ButtonClass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ButtonLink'); ?>
		<?php echo $form->textField($model,'ButtonLink',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ButtonLink'); ?>
	</div>
<?php
    if(!empty($model->ImageUrl)):
?>
      <div class="row imageWrapper">
        <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/img/' . $model->ImageUrl, "ImageUrl", array("width" => 250)); ?>  
      </div>
<?php
    endif
?>
    <div class="row">
      <?php echo $form->labelEx($model, 'ImageUrl'); ?>
      <?php echo CHtml::activeFileField($model, 'FImageUrl'); ?>  
      <?php echo $form->error($model, 'ImageUrl'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
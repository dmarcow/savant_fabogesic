<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dolores-cabeza-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
  'htmlOptions' => array('enctype'=>'multipart/form-data'),    
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  <h4>Imágenes</h4>

  <div class="row">
		<?php echo $form->labelEx($model,'ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'ImageUrl'); ?>
	</div>    
  
  <hr/>
  <h4>Textos</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'Subtitle'); ?>
		<?php echo $form->textField($model,'Subtitle',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Subtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text1'); ?>
		<?php echo $form->textArea($model,'Text1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text2'); ?>
		<?php echo $form->textArea($model,'Text2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text3'); ?>
		<?php echo $form->textArea($model,'Text3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text4'); ?>
		<?php echo $form->textArea($model,'Text4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text4'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
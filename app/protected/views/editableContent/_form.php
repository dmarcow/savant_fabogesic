<?php
/* @var $this EditableContentController */
/* @var $model EditableContent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'editable-content-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'homeA1'); ?>
		<?php echo $form->textArea($model,'homeA1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'homeA1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presentacionesA1'); ?>
		<?php echo $form->textArea($model,'presentacionesA1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'presentacionesA1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
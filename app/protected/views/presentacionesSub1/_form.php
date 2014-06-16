<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presentaciones-sub1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub1ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub1ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub1ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub1Text'); ?>
		<?php echo $form->textField($model,'Sub1Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub1Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub1Link'); ?>
		<?php echo $form->textField($model,'Sub1Link',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub1Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub2ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub2ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub2Text'); ?>
		<?php echo $form->textField($model,'Sub2Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub2Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub2Link'); ?>
		<?php echo $form->textField($model,'Sub2Link',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub2Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub3ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub3ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub3ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub3Text'); ?>
		<?php echo $form->textField($model,'Sub3Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub3Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub3Link'); ?>
		<?php echo $form->textField($model,'Sub3Link',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub3Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub4ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub4ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub4ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub4Text'); ?>
		<?php echo $form->textField($model,'Sub4Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub4Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub4Link'); ?>
		<?php echo $form->textField($model,'Sub4Link',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub4Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub5ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub5ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub5ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub5Text'); ?>
		<?php echo $form->textField($model,'Sub5Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub5Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub5Link'); ?>
		<?php echo $form->textField($model,'Sub5Link',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub5Link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
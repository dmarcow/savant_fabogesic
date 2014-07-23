<?php
/* @var $this PresentacionesSub3Controller */
/* @var $model PresentacionesSub3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presentaciones-sub3-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Image1Url'); ?>
		<?php echo $form->textField($model,'Image1Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image1Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image2Url'); ?>
		<?php echo $form->textField($model,'Image2Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image2Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image3Url'); ?>
		<?php echo $form->textField($model,'Image3Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image3Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image4Url'); ?>
		<?php echo $form->textField($model,'Image4Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image4Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image5Url'); ?>
		<?php echo $form->textField($model,'Image5Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image5Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image6Url'); ?>
		<?php echo $form->textField($model,'Image6Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image6Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image7Url'); ?>
		<?php echo $form->textField($model,'Image7Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image7Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image8Url'); ?>
		<?php echo $form->textField($model,'Image8Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image8Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image9Url'); ?>
		<?php echo $form->textField($model,'Image9Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image9Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Image10Url'); ?>
		<?php echo $form->textField($model,'Image10Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image10Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text1'); ?>
		<?php echo $form->textField($model,'Text1',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'Text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text2'); ?>
		<?php echo $form->textField($model,'Text2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text3'); ?>
		<?php echo $form->textField($model,'Text3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text4'); ?>
		<?php echo $form->textArea($model,'Text4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text5'); ?>
		<?php echo $form->textArea($model,'Text5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text6'); ?>
		<?php echo $form->textArea($model,'Text6',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl1'); ?>
		<?php echo $form->textField($model,'BtnImageUrl1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'BtnImageUrl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl2'); ?>
		<?php echo $form->textField($model,'BtnImageUrl2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'BtnImageUrl2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text9'); ?>
		<?php echo $form->textArea($model,'Text9',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text10'); ?>
		<?php echo $form->textArea($model,'Text10',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text11'); ?>
		<?php echo $form->textArea($model,'Text11',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text12'); ?>
		<?php echo $form->textArea($model,'Text12',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text13'); ?>
		<?php echo $form->textArea($model,'Text13',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Text13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prospecto1ImageUrl'); ?>
		<?php echo $form->textField($model,'Prospecto1ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Prospecto1ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prospecto2ImageUrl'); ?>
		<?php echo $form->textField($model,'Prospecto2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Prospecto2ImageUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this DoloresController */
/* @var $model Dolores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dolores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'MuscularesImageUrl'); ?>
		<?php echo $form->textField($model,'MuscularesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'MuscularesImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MuscularesSubtitle'); ?>
		<?php echo $form->textField($model,'MuscularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'MuscularesSubtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MuscularesSub1'); ?>
		<?php echo $form->textArea($model,'MuscularesSub1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MuscularesSub1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PosturalesImageUrl'); ?>
		<?php echo $form->textField($model,'PosturalesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PosturalesImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PostularesSubtitle'); ?>
		<?php echo $form->textField($model,'PostularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'PostularesSubtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PostularesSub1'); ?>
		<?php echo $form->textArea($model,'PostularesSub1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PostularesSub1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PostularesSub2'); ?>
		<?php echo $form->textArea($model,'PostularesSub2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PostularesSub2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PostularesSub3'); ?>
		<?php echo $form->textArea($model,'PostularesSub3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'PostularesSub3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesImageUrl'); ?>
		<?php echo $form->textField($model,'MenstrualesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'MenstrualesImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSubtitle'); ?>
		<?php echo $form->textField($model,'MenstrualesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'MenstrualesSubtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSub1'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MenstrualesSub1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSub2'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MenstrualesSub2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSub2ImageUrl'); ?>
		<?php echo $form->textField($model,'MenstrualesSub2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'MenstrualesSub2ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSub3'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MenstrualesSub3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesImageUrl'); ?>
		<?php echo $form->textField($model,'ArticularesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ArticularesImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSubtitle'); ?>
		<?php echo $form->textField($model,'ArticularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'ArticularesSubtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSub1'); ?>
		<?php echo $form->textArea($model,'ArticularesSub1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArticularesSub1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSub2'); ?>
		<?php echo $form->textArea($model,'ArticularesSub2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArticularesSub2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSub3'); ?>
		<?php echo $form->textArea($model,'ArticularesSub3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArticularesSub3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSub4'); ?>
		<?php echo $form->textArea($model,'ArticularesSub4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArticularesSub4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArticularesSub5'); ?>
		<?php echo $form->textArea($model,'ArticularesSub5',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ArticularesSub5'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this PresentacionesSub1Controller */
/* @var $model PresentacionesSub1 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub1ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub1ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub1Text'); ?>
		<?php echo $form->textField($model,'Sub1Text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub1Link'); ?>
		<?php echo $form->textField($model,'Sub1Link',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub2ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub2Text'); ?>
		<?php echo $form->textField($model,'Sub2Text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub2Link'); ?>
		<?php echo $form->textField($model,'Sub2Link',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub3ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub3ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub3Text'); ?>
		<?php echo $form->textField($model,'Sub3Text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub3Link'); ?>
		<?php echo $form->textField($model,'Sub3Link',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub4ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub4ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub4Text'); ?>
		<?php echo $form->textField($model,'Sub4Text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub4Link'); ?>
		<?php echo $form->textField($model,'Sub4Link',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub5ImageUrl'); ?>
		<?php echo $form->textField($model,'Sub5ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub5Text'); ?>
		<?php echo $form->textField($model,'Sub5Text',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sub5Link'); ?>
		<?php echo $form->textField($model,'Sub5Link',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaCreacion'); ?>
		<?php echo $form->textField($model,'FechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FechaModificacion'); ?>
		<?php echo $form->textField($model,'FechaModificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
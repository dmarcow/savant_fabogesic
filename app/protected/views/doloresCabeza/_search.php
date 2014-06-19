<?php
/* @var $this DoloresCabezaController */
/* @var $model DoloresCabeza */
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
		<?php echo $form->label($model,'ImageUrl'); ?>
		<?php echo $form->textField($model,'ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Subtitle'); ?>
		<?php echo $form->textField($model,'Subtitle',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text1'); ?>
		<?php echo $form->textArea($model,'Text1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text2'); ?>
		<?php echo $form->textArea($model,'Text2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text3'); ?>
		<?php echo $form->textArea($model,'Text3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Text4'); ?>
		<?php echo $form->textArea($model,'Text4',array('rows'=>6, 'cols'=>50)); ?>
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
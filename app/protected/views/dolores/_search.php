<?php
/* @var $this DoloresController */
/* @var $model Dolores */
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
		<?php echo $form->label($model,'MuscularesImageUrl'); ?>
		<?php echo $form->textField($model,'MuscularesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MuscularesSubtitle'); ?>
		<?php echo $form->textField($model,'MuscularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MuscularesSub1'); ?>
		<?php echo $form->textArea($model,'MuscularesSub1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PosturalesImageUrl'); ?>
		<?php echo $form->textField($model,'PosturalesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PostularesSubtitle'); ?>
		<?php echo $form->textField($model,'PostularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PostularesSub1'); ?>
		<?php echo $form->textArea($model,'PostularesSub1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PostularesSub2'); ?>
		<?php echo $form->textArea($model,'PostularesSub2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PostularesSub3'); ?>
		<?php echo $form->textArea($model,'PostularesSub3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesImageUrl'); ?>
		<?php echo $form->textField($model,'MenstrualesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesSubtitle'); ?>
		<?php echo $form->textField($model,'MenstrualesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesSub1'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesSub2'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesSub2ImageUrl'); ?>
		<?php echo $form->textField($model,'MenstrualesSub2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MenstrualesSub3'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesImageUrl'); ?>
		<?php echo $form->textField($model,'ArticularesImageUrl',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSubtitle'); ?>
		<?php echo $form->textField($model,'ArticularesSubtitle',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSub1'); ?>
		<?php echo $form->textArea($model,'ArticularesSub1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSub2'); ?>
		<?php echo $form->textArea($model,'ArticularesSub2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSub3'); ?>
		<?php echo $form->textArea($model,'ArticularesSub3',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSub4'); ?>
		<?php echo $form->textArea($model,'ArticularesSub4',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ArticularesSub5'); ?>
		<?php echo $form->textArea($model,'ArticularesSub5',array('rows'=>6, 'cols'=>50)); ?>
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
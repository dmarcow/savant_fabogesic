<?php
/* @var $this QueEsIbuprofenoController */
/* @var $model QueEsIbuprofeno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'que-es-ibuprofeno-form',
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
		<?php echo $form->labelEx($model,'Image1Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image1Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage1Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image1Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image2Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image2Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage2Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image2Url'); ?>
	</div>

  <hr/>
  <h4>Textos</h4>
  
	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SubTitle'); ?>
		<?php echo $form->textField($model,'SubTitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'SubTitle'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
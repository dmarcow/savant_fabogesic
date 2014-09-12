<?php
/* @var $this ProspectoIbuprofenoController */
/* @var $model ProspectoIbuprofeno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prospecto-ibuprofeno-form',
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
		<?php echo $form->labelEx($model,'ImageIcon1Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ImageIcon1Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImageIcon1Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'ImageIcon1Url'); ?>
	</div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'ImageIcon2Url'); ?>
    <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ImageIcon2Url; ?>" width="80px" height="auto"><br>
      <?php echo CHtml::activeFileField($model, 'FImageIcon2Url', array('required' => false)); ?>
      <?php echo $form->error($model,'ImageIcon2Url'); ?>
  </div>

  <div class="row">
		<?php echo $form->labelEx($model,'ImageIcon3Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ImageIcon3Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImageIcon3Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'ImageIcon3Url'); ?>
	</div>
  
  <div class="row">
    <?php echo $form->labelEx($model,'ImageIcon4Url'); ?>
    <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ImageIcon4Url; ?>" width="80px" height="auto"><br>
      <?php echo CHtml::activeFileField($model, 'FImageIcon4Url', array('required' => false)); ?>
      <?php echo $form->error($model,'ImageIcon4Url'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'GraphicImageUrl'); ?>
    <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->GraphicImageUrl; ?>" width="80px" height="auto"><br>
      <?php echo CHtml::activeFileField($model, 'FGraphicImageUrl', array('required' => false)); ?>
      <?php echo $form->error($model,'GraphicImageUrl'); ?>
  </div>

  <hr/>
  <h4>Textos</h4>
  
	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Subtitle'); ?>
		<?php echo $form->textField($model,'Subtitle',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Subtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Text1'); ?>
		<?php echo $form->textField($model,'Text1',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Text1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TextIcon1'); ?>
		<?php echo $form->textField($model,'TextIcon1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'TextIcon1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageIcon1Url'); ?>
		<?php echo $form->textField($model,'ImageIcon1Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ImageIcon1Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TextIcon2'); ?>
		<?php echo $form->textField($model,'TextIcon2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'TextIcon2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageIcon2Url'); ?>
		<?php echo $form->textField($model,'ImageIcon2Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ImageIcon2Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TextIcon3'); ?>
		<?php echo $form->textField($model,'TextIcon3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'TextIcon3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageIcon3Url'); ?>
		<?php echo $form->textField($model,'ImageIcon3Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ImageIcon3Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TextIcon4'); ?>
		<?php echo $form->textField($model,'TextIcon4',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'TextIcon4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ImageIcon4Url'); ?>
		<?php echo $form->textField($model,'ImageIcon4Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'ImageIcon4Url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GraphicImageUrl'); ?>
		<?php echo $form->textField($model,'GraphicImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'GraphicImageUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
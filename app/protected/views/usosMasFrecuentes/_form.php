<?php
/* @var $this UsosMasFrecuentesController */
/* @var $model UsosMasFrecuentes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usos-mas-frecuentes-form',
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

    <div class="row">
		<?php echo $form->labelEx($model,'Image3Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image3Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage3Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image3Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image4Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image4Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage4Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image4Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image5Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image5Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage5Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image5Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image6Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image6Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage6Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image6Url'); ?>
	</div>

    <hr/>
    <h4>Textos</h4> 



	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image1Url'); ?>
		<?php echo $form->textField($model,'Image1Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image1Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text1'); ?>
		<?php echo $form->textField($model,'Text1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text1'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image2Url'); ?>
		<?php echo $form->textField($model,'Image2Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image2Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text2'); ?>
		<?php echo $form->textField($model,'Text2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text2'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image3Url'); ?>
		<?php echo $form->textField($model,'Image3Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image3Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text3'); ?>
		<?php echo $form->textField($model,'Text3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text3'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image4Url'); ?>
		<?php echo $form->textField($model,'Image4Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image4Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text4'); ?>
		<?php echo $form->textField($model,'Text4',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text4'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image5Url'); ?>
		<?php echo $form->textField($model,'Image5Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image5Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text5'); ?>
		<?php echo $form->textField($model,'Text5',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text5'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Image6Url'); ?>
		<?php echo $form->textField($model,'Image6Url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Image6Url'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Text6'); ?>
		<?php echo $form->textField($model,'Text6',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Text6'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
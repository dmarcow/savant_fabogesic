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

    <div class="row">
		<?php echo $form->labelEx($model,'Image7Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image7Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage7Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image7Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image8Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image8Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage8Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image8Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image9Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image9Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage9Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image9Url'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Image10Url'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Image10Url; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FImage10Url', array('required' => false)); ?>  
		<?php echo $form->error($model,'Image10Url'); ?>
	</div>

  <hr/>
  <h4>Botones</h4>

    <div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl1'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->BtnImageUrl1; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FBtnImageUrl1', array('required' => false)); ?>  
		<?php echo $form->error($model,'BtnImageUrl1'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl2'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->BtnImageUrl2; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FBtnImageUrl2', array('required' => false)); ?>  
		<?php echo $form->error($model,'BtnImageUrl2'); ?>
	</div>

  <hr/>
  <h4>Prospectos</h4>  
 
    <div class="row">
		<?php echo $form->labelEx($model,'Prospecto1ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . $model->Prospecto1ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FProspecto1ImageUrl', array('required' => false)); ?>  
        <?php echo $form->labelEx($model,'Prospecto'); ?>
        <?php echo $form->textField($model,'Prospecto',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo CHtml::activeFileField($model, 'ProspectoFile'); ?>
		<?php echo $form->error($model,'Prospecto1ImageUrl'); ?>
	</div>

    <div class="row">
		<?php echo $form->labelEx($model,'Prospecto2ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . $model->Prospecto2ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FProspecto2ImageUrl', array('required' => false)); ?>
        <?php echo $form->labelEx($model,'Prospecto2'); ?>
        <?php echo $form->textField($model,'Prospecto2',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo CHtml::activeFileField($model, 'ProspectoFile2'); ?>          
		<?php echo $form->error($model,'Prospecto2ImageUrl'); ?>
	</div>

  <hr/>
  <h4>Textos</h4>  
  
    <!--<div class="row">
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
	</div>-->

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

<!--	<div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl1'); ?>
		<?php echo $form->textField($model,'BtnImageUrl1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'BtnImageUrl1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BtnImageUrl2'); ?>
		<?php echo $form->textField($model,'BtnImageUrl2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'BtnImageUrl2'); ?>
	</div>  -->



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

<!--	<div class="row">
		<?php echo $form->labelEx($model,'Prospecto1ImageUrl'); ?>
		<?php echo $form->textField($model,'Prospecto1ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Prospecto1ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Prospecto2ImageUrl'); ?>
		<?php echo $form->textField($model,'Prospecto2ImageUrl',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Prospecto2ImageUrl'); ?>
	</div>  -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
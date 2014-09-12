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
  'htmlOptions' => array('enctype'=>'multipart/form-data'),  
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  <h4>Imágenes</h4>

  <div class="row">
		<?php echo $form->labelEx($model,'MuscularesImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->MuscularesImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FMuscularesImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'MuscularesImageUrl'); ?>
	</div>  
  
  <div class="row">
		<?php echo $form->labelEx($model,'PosturalesImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->PosturalesImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FPosturalesImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'PosturalesImageUrl'); ?>
	</div>  
  
  <div class="row">
		<?php echo $form->labelEx($model,'MenstrualesImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->MenstrualesImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FMenstrualesImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'MenstrualesImageUrl'); ?>
	</div>  
  
  <div class="row">
		<?php echo $form->labelEx($model,'MenstrualesSub2ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->MenstrualesSub2ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FMenstrualesSub2ImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'MenstrualesSub2ImageUrl'); ?>
	</div>  
  
  <div class="row">
		<?php echo $form->labelEx($model,'ArticularesImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->ArticularesImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FArticularesImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'ArticularesImageUrl'); ?>
	</div>    

	<div class="row">
		<?php echo $form->labelEx($model,'NinosImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->NinosImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FNinosImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'NinosImageUrl'); ?>
	</div>    
  
  <hr/>
  <h4>Textos</h4>  
  
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
		<?php echo $form->labelEx($model,'PostularesSubtitle'); ?>
		<?php echo $form->textField($model,'PostularesSubtitle',array('size'=>60,'maxlength'=>999)); ?>
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
		<?php echo $form->labelEx($model,'MenstrualesSub3'); ?>
		<?php echo $form->textArea($model,'MenstrualesSub3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'MenstrualesSub3'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'NinosSubtitle'); ?>
		<?php echo $form->textField($model,'NinosSubtitle',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'NinosSubtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NinosSub1'); ?>
		<?php echo $form->textArea($model,'NinosSub1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NinosSub1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NinosSub2'); ?>
		<?php echo $form->textArea($model,'NinosSub2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NinosSub2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NinosSub3'); ?>
		<?php echo $form->textArea($model,'NinosSub3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NinosSub3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NinosSub4'); ?>
		<?php echo $form->textArea($model,'NinosSub4',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'NinosSub4'); ?>
	</div>
  
  <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this PresentacionesSub4Controller */
/* @var $model PresentacionesSub4 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'presentaciones-sub4-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <h4>400mg</h4>

    <div class="row">
		<?php echo $form->labelEx($model,'Sub1ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Sub1ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FSub1ImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'Sub1ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub1Text'); ?>
		<?php echo $form->textField($model,'Sub1Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub1Text'); ?>
	</div>

    <hr />
    <h4>600mg</h4>

    <div class="row">
		<?php echo $form->labelEx($model,'Sub2ImageUrl'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $model->Sub2ImageUrl; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FSub2ImageUrl', array('required' => false)); ?>  
		<?php echo $form->error($model,'Sub2ImageUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub2Text'); ?>
		<?php echo $form->textField($model,'Sub2Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub2Text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub3Text'); ?>
		<?php echo $form->textField($model,'Sub3Text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'Sub3Text'); ?>
	</div>

    <hr />
    <h4>Prospectos</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub1Link'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . $model->Sub1Link; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FSub1Link'); ?>
        <?php echo $form->labelEx($model,'Prospecto'); ?>
        <?php echo $form->textField($model,'Prospecto',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo CHtml::activeFileField($model, 'ProspectoFile'); ?>
		<?php echo $form->error($model,'Sub1Link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sub2Link'); ?>
		<img src="<?php echo Yii::app()->theme->baseUrl . '/img/prospectos/' . $model->Sub2Link; ?>" width="80px" height="auto"><br>
		<?php echo CHtml::activeFileField($model, 'FSub2Link'); ?>
        <?php echo $form->labelEx($model,'Prospecto2'); ?>
        <?php echo $form->textField($model,'Prospecto2',array('size'=>60,'maxlength'=>200)); ?>
        <?php echo CHtml::activeFileField($model, 'ProspectoFile2'); ?>
		<?php echo $form->error($model,'Sub2Link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
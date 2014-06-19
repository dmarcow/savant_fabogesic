<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="login">

	<h1>Ingresar</h1>

	<p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

		<div class="row">
			<div class="form-group">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'username',array('class'=>'form-control')); ?>
			</div>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
			<?php echo $form->error($model,'password',array('class'=>'form-control')); ?>
		</div>

		<div class="row checkbox">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('ENTRAR',array('class'=>'btn btn-primary')); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->

</div>


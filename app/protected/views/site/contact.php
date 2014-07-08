<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
?>

<div class="container contacto">

  <div class="row">

    <div class="col-xs-12 col-sm-6">
      <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $contactModel->ImageUrl?>" alt="Contacto" />
    </div>

    

    <div class="col-xs-12 col-sm-6">
     
      <?php echo $contactModel->Title ?>

      <div role="form" class="form">
        
        <!--
        <form class="form-signin" role="form" ng-controller="loginCtrl">

            <div class="form-group {{usererror}}">
              <label>Nombre *</label>
              <input type="text" class="form-control" placeholder="" ng-model="nombre" my-focus="focusField1" autofocus>
            </div>
            
            <div class="form-group {{passerror}}">
              <label>Apellido *</label>
              <input type="text" class="form-control" placeholder="" ng-model="apellido" my-focus="focusField2">
            </div>

            <div class="form-group {{asunerror}}">
              <label>Asunto *</label>
              <input type="text" class="form-control" placeholder="" ng-model="asunto" my-focus="focusField3">
            </div>

            <div class="form-group {{menserror}}">
              <label>Mesanje *</label>
              <textarea class="form-control" ng-model="mensaje" my-focus="focusField4"></textarea>
            </div>          
             
            <div class="form-group">
              <p class="text-right">
                <button class="btn btn-default" type="submit" ng-click="validateForm()">Enviar</button>
              </p>
            </div>

            <div>{{aviso}}</div>
          
        </form>
        -->
        
        <?php $form=$this->beginWidget('CActiveForm', array(
          'id'=>'contact-form',
          'enableClientValidation'=>true,
          'clientOptions'=>array(
            'validateOnSubmit'=>true
          )
        )); ?>

        <?php //echo $form->errorSummary($model); ?>

        <div class="form-group">
          <?php echo $form->labelEx($model,'name'); ?>
          <?php echo $form->textField($model,'name', array( 'class'=>'form-control')); ?>
          <?php echo $form->error($model,'name'); ?>
        </div>

        <div class="form-group">
          <?php echo $form->labelEx($model,'lastname'); ?>
          <?php echo $form->textField($model,'lastname',array( 'class'=>'form-control')); ?>
          <?php echo $form->error($model,'lastname'); ?>
        </div>

        <div class="form-group">
          <?php echo $form->labelEx($model,'subject'); ?>
          <?php echo $form->textField($model,'subject',array( 'class'=>'form-control')); ?>
          <?php echo $form->error($model,'subject'); ?>
        </div>

        <div class="form-group">
          <?php echo $form->labelEx($model,'body'); ?>
          <?php echo $form->textArea($model,'body', array( 'class'=>'form-control')); ?>
          <?php echo $form->error($model,'body'); ?>
        </div>

        <div class="form-group">
          <?php echo $form->error($model,'msg'); ?>
        </div>

        <div class="form-group">
          <p class="text-right">
            <?php echo CHtml::submitButton('Enviar',array('class'=>'btn btn-default')); ?>
          </p>
        </div>

        <?php $this->endWidget(); ?>

      </div><!-- form -->

    </div>

    <div class="col-xs-12 col-sm-6">
      <p class="text-center">O llamenos al 0810 444 32267</p>
    </div>
    

  </div>

</div><!-- /.container -->









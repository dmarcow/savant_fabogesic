<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container contacto">

  <div class="row">



    <div class="col-xs-12 col-sm-6">
      <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/bg-contact-form.png'?> " alt="Contacto" />
    </div>

    <div class="col-xs-12 col-sm-6">

      <h3 class="text-center">Por cualquier consulta o inquietud lo invitamos a ponerse en contacto con nosotros</h3>
      <form role="form" action="contact-form.php" method="post" name="userForm" ng-submit="submitForm(userForm.$valid)" novalidate>
        
        <div class="form-group" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
          <label>Nombre</label>
          <input type="text" name="name" class="form-control" ng-model="name" required>
          <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">Campo obligatorio.</p>
        </div>

        <div class="form-group" ng-class="{ 'has-error' : userForm.lastname.$invalid && !userForm.lastname.$pristine }">
          <label>Apellido</label>
          <input type="text" name="lastname" class="form-control" ng-model="lastname" required>
          <p ng-show="userForm.lastname.$invalid && !userForm.lastname.$pristine" class="help-block">Campo obligatorio.</p>
        </div>

        <div class="form-group" ng-class="{ 'has-error' : userForm.subject.$invalid && !userForm.subject.$pristine }">
          <label>Asunto</label>
          <input type="text" name="subject" class="form-control" ng-model="subject" required>
          <p ng-show="userForm.subject.$invalid && !userForm.subject.$pristine" class="help-block">Campo obligatorio.</p>
        </div>

        <div class="form-group" ng-class="{ 'has-error' : userForm.message.$invalid && !userForm.message.$pristine }">
          <label>Mensaje</label>
          <textarea class="form-control" rows="3" name="message" class="form-control" ng-model="message" required></textarea>
          <p ng-show="userForm.message.$invalid && !userForm.message.$pristine" class="help-block">Campo obligatorio.</p>
        </div>

        <div class="form-group">
          <p class="text-right">
            <button type="submit" class="btn btn-default" ng-disabled="userForm.$invalid">Enviar</button>
          </p>
        </div>
        
      </form>
    </div>

  </div>

</div><!-- /.container -->
<?php 

//echo $contentEdModel->presentacionesA1;

?>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container presentaciones">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <a href="capsulas-blandas.html" class="col-sm-4">
      <div class="producto">
       	<img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/caja-capsulas.png'?> " alt="Cápsulas blandas"> 
        <p>Cápsulas blandas</p>
      </div>
    </a><!-- /.col-sm-4 -->
    <a href="comprimidos.html" class="col-sm-4">
      <div class="producto">
        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/caja-comprimidos.png'?> " alt="Comprimidos">
        <p>Comprimidos</p>
      </div>
    </a><!-- /.col-sm-4 -->
    <a href="seccion-pediatrica.html" class="col-sm-4">
      <div class="producto">
        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/caja-suspension.png'?> " alt="Suspensión oral">
        <p>Suspensión oral</p>
      </div>
    </a><!-- /.col-sm-4 -->
  </div><!-- /.row -->

  <div class="row">
    <div class="bottom-logo"></div>
  </div>

</div><!-- /.container -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/main-logo.png'?>" alt="Fabogesic"></h4>
      </div>
      <div class="modal-body">
        <p>El contenido de esta página web es únicamente de carácter informativo general.</p> 
        <p>Recuerde siempre, en caso de necesitar mayor información de carácter médico, dirigirse a un profesional de la salud.</p>
        <p><img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-capsulas.png'?> " alt="Fabogesic"></p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-success" data-dismiss="modal" data-role="button">ACEPTAR</a>
      </div>
    </div>
  </div>
</div>

<script>
$( document ).ready(function() {
	$( "body" ).addClass("bg-primary");
});
</script>
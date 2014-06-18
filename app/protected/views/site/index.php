<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

//echo $contentEdModel->homeA1;
?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
  		<?php 
  		for($i = 0; $i < count($sliders); $i++){
  			if($i == 0){
       			echo '<li data-target="#myCarousel" data-slide-to="' . $i . '" class="active"></li>';		
  			}else{
  				echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
  			}
    	}?>
      </ol>
      <div class="carousel-inner">

      	<?php 
      		for($i = 0; $i < count($sliders); $i++){
        	
	        	$url = HTTP_AND_SERVER_CONST . Yii::app()->baseUrl . "/" . SLIDE_IMAGES_PATH . $sliders[$i]->ImageUrl;
		        if($i == 0){
		          echo '<div class="item active">';
		        }else{
		          echo '<div class="item">';
		        }
		         echo '<img src="' .  $url . '" alt="Slide">
		          <div class="container">
		            <div class="carousel-caption">
		            </div>
		          </div>';
		        echo '</div>';
	    	}
        ?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


        <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="marketing">

      <!-- Four columns of text below the carousel -->
        
        <div class="col-md-3 bg-primary">
          <h4>PRESENTACIONES</h4>
          <p>Conocé las distintas presentaciones de Fabogesic: Cápsulas blandas, comprimidos y Solución oral, en sus distintas versiones.</p>
          <?php $url1 = Yii::app()->createUrl('site/presentaciones/'); ?>
          <a class="btn btn-warning" href="<?php echo $url1?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-cajas.png'?> " alt="PRESENTACIONES">
        </div><!-- /.col-md-3 -->
        
        <div class="col-md-3 bg-warning">
          <h4>¿QUÉ ES IBUPROFENO?</h4>
          <p>Fabogesic es un ibuprofeno que te ayuda a aliviar cualquier tipo de dolor que puede presentarse en tu organismo como los dolores de cabeza, posturales y muchos otros. Conocé los beneficios.</p>
          <?php $url2 = Yii::app()->createUrl('site/queEsIbuprofeno/'); ?>
          <a class="btn btn-primary" href="<?php echo $url2 ?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-capsulas.png'?> " alt="¿QUÉ ES IBUPROFENO?">
        </div><!-- /.col-md-3 -->
        
        <div class="col-md-3 bg-primary">
          <h4>USOS MÁS FRECUENTES</h4>
          <p>Frente a distintos dolores, Fabogesic actúa de forma rápida y eficaz. Dolores musculares, postulares, articulares o de cabeza, son tratados para que puedas continuar con tus tareas diarias.</p>
          <?php $url3 = Yii::app()->createUrl('site/usosMasFrecuentes/'); ?>
          <a class="btn btn-success" href="<?php echo $url3 ?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/pizarra.png'?> " alt="USOS MÁS FRECUENTES">
        </div> <!-- /.col-md-3 -->

        <div class="col-md-3 bg-warning">
          <h4>¿QUIENES SOMOS?</h4>
          <p>Conocé nuestros otros productos en nuestro sitio web.</p>
          <a class="btn btn-default" href="http://www.savant.com.ar" target="_blank" role="button">VER MÁS</a>
        </div> <!-- /.col-xs-6 .col-sm-3 -->

    </div><!-- /.marketing -->



        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-show="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <h4 class="modal-title" id="myModalLabel"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/main-logo.png'?> " alt="Fabogesic"></h4>
          </div>
          <div class="modal-body">
            <p>La información de productos incluida en esta web es la contenida en el último prospecto aprobado por la Autoridad Regulatoria, se ofrece solamente con carácter informativo o educativo, sin fines promocionales y no pretende sustituir las opiniones y recomendaciones de los profesionales de la salud, que son los que deben tomar las decisiones relativas a la prescripción de medicamentos, teniendo en cuenta las características únicas de cada paciente.</p>
            <p><img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-capsulas.png'?> " alt="Fabogesic"></p>
          </div>
          <div class="modal-footer">
            <a class="btn btn-success" data-dismiss="modal" data-role="button">ACEPTAR</a>
          </div>
        </div>
      </div>
    </div>

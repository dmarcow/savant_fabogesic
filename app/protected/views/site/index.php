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
            $link = $sliders[$i]->LinkUrl;
		        if($i == 0){
		          echo '<div class="item active">';
		        }else{
		          echo '<div class="item">';
		        }
		         echo '<a href="' . $link . '"><img src="' .  $url . '" alt="Slide"></a>
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

      	<?php
            for($i = 0; $i < count($hboxes); $i++){
                $bgclass = 'bg-primary';
                if($i % 2 != 0)
                    $bgclass = 'bg-warning';

                $linkTarget = '';
                
                if(strpos($hboxes[$i]->ButtonLink, 'http://') === false)
                    $linkUrl =  Yii::app()->createUrl($hboxes[$i]->ButtonLink);
                else
                {
                    $linkUrl = $hboxes[$i]->ButtonLink;
                    $linkTarget = ' target="_blank"';
                }

                echo('<div class="col-md-3 '.$bgclass.'">') ;
                echo('<h4>'.$hboxes[$i]->Title.'</h4>');
                echo('<p>'.$hboxes[$i]->Text.'</p>');
                echo('<a href="'.$linkUrl.'" role="button" class="btn '.$hboxes[$i]->ButtonClass.'"'.$linkTarget.'>'.$hboxes[$i]->ButtonText.'</a>');
                if(!empty($hboxes[$i]->ImageUrl))
                    echo('<img src="'.Yii::app()->theme->baseUrl . '/img/'.$hboxes[$i]->ImageUrl. '" alt="'.$hboxes[$i]->Title.'">');
                echo('</div>') ;
            }              
        ?> 
        
    <!--    <div class="col-md-3 bg-primary">
          <h4>PRODUCTO</h4>
          <p>Conocé las distintas versiones de Fabogesic: cápsulas blandas, comprimidos, solución oral, en sus distintas presentaciones.</p>
          <?php $url1 = Yii::app()->createUrl('site/presentaciones/'); ?>
          <a class="btn btn-warning" href="<?php echo $url1?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-cajas.png'?> " alt="PRESENTACIONES">
        </div>
        
        <div class="col-md-3 bg-warning">
          <h4>¿QUÉ ES IBUPROFENO?</h4>
          <p>El ibuprofeno es un analgésico seguro y eficaz, que forma parte de una clase de medicamentos. Conocé sus beneficios.</p>
          <?php $url2 = Yii::app()->createUrl('site/queEsIbuprofeno/'); ?>
          <a class="btn btn-primary" href="<?php echo $url2 ?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/fabogesic-capsulas.png'?> " alt="¿QUÉ ES IBUPROFENO?">
        </div>
        
        <div class="col-md-3 bg-primary">
          <h4>USOS MÁS FRECUENTES</h4>
          <p>Frente a distintos dolores, Fabogesic actúa de forma rápida y eficaz. Dolores musculares, postulares, articulares o de cabeza, son tratados para que puedas continuar con tus tareas diarias.</p>
          <?php $url3 = Yii::app()->createUrl('site/usosMasFrecuentes/'); ?>
          <a class="btn btn-success" href="<?php echo $url3 ?>" role="button">VER MÁS</a>
          <img src="<?php echo Yii::app()->theme->baseUrl . '/img/pizarra.png'?> " alt="USOS MÁS FRECUENTES">
        </div>

        <div class="col-md-3 bg-warning">
          <h4>CERTEZA DE CALIDAD</h4>
          <p>Fabogesic es producido y comercializado por SAVANT.</p>
          <a class="btn btn-default" href="http://www.savant.com.ar" target="_blank" role="button">VER MÁS</a>
        </div> -->

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
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

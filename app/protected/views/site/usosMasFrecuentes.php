<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container presentaciones">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <?php $url1 = Yii::app()->createUrl('site/doloresMusculares/'); ?>
    <a href="<?php echo $url1 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image1Url ?> " alt="Dolores musculares e inflamación" />
        <p><?php echo $usosModel->Text1 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
    <?php $url2 = Yii::app()->createUrl('site/doloresPosturales/'); ?>
    <a href="<?php echo $url2 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image2Url ?> " alt="Dolores posturales" />
        <p><?php echo $usosModel->Text2 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
    <?php $url3 = Yii::app()->createUrl('site/doloresMenstruales/'); ?>
    <a href="<?php echo $url3 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image3Url ?> " alt="Dolores menstruales" />
        <p><?php echo $usosModel->Text3 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
  </div><!-- /.row -->

  <div class="row">
    <?php $url4 = Yii::app()->createUrl('site/doloresCabeza/'); ?>
    <a href="<?php echo $url4 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image4Url ?> " alt="Dolores de cabeza" />
        <p><?php echo $usosModel->Text4 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
    <?php $url5 = Yii::app()->createUrl('site/doloresArticulares/'); ?>
    <a href="<?php echo $url5 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
         <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image5Url ?> " alt="Dolores articulares" />
        <p><?php echo $usosModel->Text5 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
    <?php $url6 = Yii::app()->createUrl('site/presentacionesSub3/'); ?>
    <a href="<?php echo $url6 ?>" class="col-sm-4">
      <div class="producto usos-frecuentes">
         <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $usosModel->Image6Url ?> " alt="Dolores en niños" />
        <p><?php echo $usosModel->Text6 ?></p>
      </div>
    </a><!-- /.col-sm-4 -->
    <!-- <a href="seccion-pediatrica.html" class="col-sm-4">
      <div class="producto usos-frecuentes">
        <img src="assets/img/dolores-ninos.png" alt="" />
        <p>Niños</p>
      </div>
    </a> --><!-- /.col-sm-4 -->
  </div><!-- /.row -->

</div><!-- /.container -->

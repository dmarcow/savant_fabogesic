
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container ibuprofeno">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-sm-12">
          <h1><?php echo $ibuproModel->Title ?></h1>

          <p class="header-description"><?php echo $ibuproModel->SubTitle ?></p>
        </div>

        <div class="contentinner">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <?php echo $ibuproModel->Text1 ?>
                <p class="text-right"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $ibuproModel->Image1Url ?> " alt=""></p>
              </div>
              <div class="col-xs-12 col-sm-6">
                <?php echo $ibuproModel->Text2 ?>
                <p class="text-right"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $ibuproModel->Image2Url ?> " alt=""></p>
              </div>
              <div class="col-sm-12">
                <?php $url = Yii::app()->createUrl('site/prospectoIbuprofeno/'); ?>
                <p class="text-center"><a href="<?php echo $url ?>"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-ver-prospecto.jpg'?> " alt="VER PROSPECTO" class="img-responsive"></a></p>
              </div>
            </div>
          </div>
        </div>
        
      </div><!-- /.row -->

    </div><!-- /.container -->
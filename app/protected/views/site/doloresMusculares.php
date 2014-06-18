<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

  <div class="header">
    <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->MuscularesImageUrl ?> " alt="DOLORES MUSCULARES E INFLAMACIÓN" />
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-sm-12">
      <p class="header-description text-center"> <?php echo $doloresModel->MuscularesSubtitle ?></p>
    </div>
    
    <div class="col-sm-12">
      <div id="accordion">

        <h4 class="panel-title margin30">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-debe-tratarse.png'?> " alt="Cómo se debe tratar una distensión muscular o inflamaciones articulares" />
          </a>
        </h4>

        <div id="collapse" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-12 text-center">
              <?php echo $doloresModel->MuscularesSub1  ?>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="col-sm-12 bordered btn-back">
      <p class="text-left">
        <?php $url = Yii::app()->createUrl('site/usosMasFrecuentes/'); ?>
        <a href="<?php echo $url ?>" class="btn btn-warning" role="button"><strong>VER OTROS USOS</strong></a>
      </p>
    </div>

  </div><!-- /.row -->

</div><!-- /.container -->
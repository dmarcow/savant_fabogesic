<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

<div class="header">
<img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->MenstrualesImageUrl ?> " alt="DOLORES MENSTRUALES" />
</div>

<!-- Three columns of text below the carousel -->
<div class="row">
<div class="col-sm-12">
  <p class="header-description text-center"><?php echo $doloresModel->MenstrualesSubtitle ?></p>
</div>

<div class="col-sm-12">

  <div class="row">

    <div class="col-sm-6">
      
      <div id="accordion">

        <h4 class="panel-title margin30">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-causa-solor-menstrual.png' ?> " alt="¿Qué causa el dolor menstrual?" />
          </a>
        </h4>

        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-12 text-left">
              <?php echo $doloresModel->MenstrualesSub1 ?>
            </div>

          </div>
        </div>

      </div>

    </div>

    <div class="col-sm-6">
      
      <div id="accordion">

        <h4 class="panel-title margin30">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-aliviar-menstrual.png' ?> " alt="¿Cómo se puede aliviar el dolor menstrual?" />
          </a>
        </h4>

        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-12 text-left">
              <?php echo $doloresModel->MenstrualesSub2 ?>
              <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->MenstrualesSub2ImageUrl ?> " alt="" />
              <!-- <img src="assets/img/simbolo-mujer.png" alt="" class="img-responsive" /> -->

            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>

<div class="col-sm-6">
  
  <div id="accordion">

    <h4 class="panel-title margin30">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
        <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-cuando-consultar.png' ?> " alt="¿Cuándo debo consultar a mi médico?" />
      </a>
    </h4>

    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="col-sm-12 text-left">
          <?php echo $doloresModel->MenstrualesSub3 ?>
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
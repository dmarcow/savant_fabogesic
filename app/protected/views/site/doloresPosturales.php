<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

  <div class="header">
    <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->PosturalesImageUrl ?> " alt="DOLORES POSTURALES" />
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-sm-12">
      <p class="header-description text-center"><?php echo $doloresModel->PostularesSubtitle ?></p>
    </div>

    <div class="col-sm-12">

      <div class="row">

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-causas-dolor-espalda.png'?> " alt="¿Qué causa el dolor de espalda?" />
              </a>
            </h4>

            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                  <?php echo $doloresModel->PostularesSub1; ?>
              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-aliviar.png'?> " alt="¿Cómo se puede aliviar el dolor de espalda?" />
              </a>
            </h4>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->PostularesSub2; ?>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
    
    <div class="col-sm-12">
      
      <div id="accordion">

        <h4 class="panel-title margin30">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-consejos-aliviar.png'?> " alt="Consejos para aliviar problemas de espalda" />
          </a>
        </h4>

        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="col-sm-12 text-left">
              
              <div class="row">
                  <?php echo $doloresModel->PostularesSub3; ?>
              </div>

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
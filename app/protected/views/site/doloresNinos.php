<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

  <div class="header">
    <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->NinosImageUrl ?> " alt="FABOGESIC NIÑOS" />
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="row">
    
    <div class="col-sm-offset-2 col-sm-10 col-xs-12">
      <div class="col-sm-2 col-xs-12"><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/vaquita.png' ?>" alt=""></div>
      <div class="col-sm-8 col-xs-12">
        <p class="header-description text-center"><?php echo $doloresModel->NinosSubtitle ?></p>
      </div>
    </div>

    <div class="col-sm-12">

      <div class="row">

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-que-sucede.png' ?> " alt="¿Qué sucede cuando el niño tiene dolor?" />
              </a>
            </h4>

            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <p><?php echo $doloresModel->NinosSub1 ?></p>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-por-que.png' ?> " alt="¿Por qué los niños sienten dolor?" />
              </a>
            </h4>

            <div id="collapseTwo" class="panel-collapse collapse">

              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <p><?php echo $doloresModel->NinosSub2 ?></p>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
    
    <div class="col-sm-12">

      <div class="row">

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-podemos.png' ?> " alt="¿Cómo podemos ayudarlos en ese momento de dolor?" />
              </a>
            </h4>

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <p><?php echo $doloresModel->NinosSub3 ?></p> 
                </div>

              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <!-- <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-sabias-que.png' ?> " alt="Sabías que..." />
              </a>
            </h4>

            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <p><?php echo $doloresModel->NinosSub4 ?></p> 
                </div>
              </div>
            </div>

          </div> -->

          <img class="img-responsive pull-right" src="<?php echo Yii::app()->theme->baseUrl . '/img/vaquita-rama.png' ?>" alt="">

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

</div><!-- /.container
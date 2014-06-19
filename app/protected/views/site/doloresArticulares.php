<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

  <div class="header">
    <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->ArticularesImageUrl ?> " alt="DOLORES ARTICULARES DEL ADULTO" />
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="row">

    <div class="col-sm-12">
      <p class="header-description text-center"><?php echo $doloresModel->ArticularesSubtitle ?></p>
    </div>

    <div class="col-sm-12">

      <div class="row">

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-aparece.png' ?> " alt="¿Cuándo puede aparecer la artritis?" />
              </a>
            </h4>

            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->ArticularesSub1 ?>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-saber.png' ?> " alt="¿Cómo podés saber si tenés artritis?" />
              </a>
            </h4>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->ArticularesSub2 ?>
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
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-signos.png' ?> " alt="¿Cuáles son los signos y síntomas?" />
              </a>
            </h4>

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->ArticularesSub3 ?> 
                </div>

              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-que-hacer.png' ?> " alt="¿Qué puedo hacer con el dolor?" />
              </a>
            </h4>

            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->ArticularesSub4 ?> 
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
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-consultar.png' ?> " alt="¿Cuándo debo consultar a un médico?" />
              </a>
            </h4>

            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  <?php echo $doloresModel->ArticularesSub5 ?> 
                </div>

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
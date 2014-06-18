<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container ibuprofeno">

<!-- Three columns of text below the carousel -->
<div class="row">
  <h1>CARACTERÍSTICAS Y BENEFICIOS</h1>
  
  <div class="col-md-12">
    <p class="header-description"><?php echo $prospectoModel->Subtitle ?> </p>
  </div>
  
  <div class="col-md-4 col-md-offset-4">
    <img class="margin30" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-beneficios.png' ?>" alt="Beneficios" />
  </div>
  
  <div class="col-md-12">
    <p class="header-description"><?php echo $prospectoModel->Text1 ?></p>
  </div>

  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 caracteristicas">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $prospectoModel->ImageIcon1Url ?>" alt="MÁXIMA POTENCIA" />
        <p><?php echo $prospectoModel->TextIcon1 ?></p> 
      </div>

      <div class="col-md-6 caracteristicas">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $prospectoModel->ImageIcon2Url ?>" alt="RÁPIDA ACCIÓN" />
        <p><?php echo $prospectoModel->TextIcon2 ?></p> 
      </div>

      <div class="col-md-6 caracteristicas">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $prospectoModel->ImageIcon3Url ?>" alt="FÁCIL DE TOMAR" />
        <p><?php echo $prospectoModel->TextIcon3 ?></p> 
      </div>

      <div class="col-md-6 caracteristicas">
        <img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $prospectoModel->ImageIcon4Url ?>" alt="INDICACIONES" />
        <p><?php echo $prospectoModel->TextIcon4 ?></p> 
      </div>
    </div>

    <div class="col-md-12">

      <div id="accordion">
        <h4 class="panel-title margin30">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/title-ver-cuadro.png' ?>" alt="Ver cuadro de cápsulas blandas y comprimidos" />
            </a>
        </h4>

        <div id="collapseOne" class="panel-collapse collapse">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $prospectoModel->GraphicImageUrl ?>" alt="Cuadro de cápsulas blandas y comprimidos" />
        </div>
      </div>
      
    </div>
  </div>
  


  
</div><!-- /.row -->

<div class="col-sm-12 btn-back">
  <p class="text-center">
    <?php $url = Yii::app()->createUrl('site/queEsIbuprofeno/'); ?>
    <a href="<?php echo $url ?>" class="btn btn-warning" role="button"><strong>VOLVER</strong></a>
  </p>
</div>

</div><!-- /.container -->
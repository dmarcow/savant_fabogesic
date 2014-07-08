<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container pediatria">
    
  <div class="row header">
    
    <div class="col-xs-12 col-sm-6">
      <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image1Url ?>" alt="Sección Pediatrica">
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row">
        <div class="col-xs-12">
          <h1><img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image2Url ?>" alt="SECCIÓN PEDIÁTRICA"></h1>
        </div>
        <div class="col-xs-12">
          <p class="text-center header-description"><?php echo $presSub3Model->Text1; ?> </p>
        </div>
        <div class="col-xs-12">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image3Url ?>" alt="¿Sabía usted... ?">
        </div>
      </div>
    </div>
  
  </div>

  <div class="row">

    <div class="col-xs-12 col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image7Url ?>" >
        </div>
        <div class="panel-footer">
          <div class="row info-box">

            <div class="col-xs-12 col-md-10">
              <h4><?php echo $presSub3Model->Text3; ?></h4>
            </div>
            <div class="col-xs-12 col-md-10">
              <div class="row">
                <div class="col-md-8"><p><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image8Url ?>" alt="VENTA LIBRE"></p></div>
                <div class="col-md-4"><a class="btn btn-default btn-xs" role="button" data-toggle="modal" data-target="#modal1">Ver prospecto</a></div>
              </div> 
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image4Url ?>" >
        </div>
        <div class="panel-footer">
          <div class="row info-box">

            <div class="col-xs-12 col-md-10">
              <h4><?php echo $presSub3Model->Text2; ?></h4>
            </div>
            <div class="col-xs-12 col-md-10">
              <div class="row">
                <div class="col-md-8"><p><img src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image5Url ?>" alt="VENTA LIBRE" /></p></p></div>
                <div class="col-md-4"><a class="btn btn-default btn-xs" role="button" data-toggle="modal" data-target="#modal2">Ver prospecto</a></div>
              </div> 
            </div>
            <img class="img-responsive nena" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image6Url ?>" alt="" />
          </div>

        </div>
      </div>
    </div>


  </div>

  <div class="row ventajas">

    <div id="accordion">

      <h4 class="panel-title text-center">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/title-ventajas.png' ?>" alt="VENTAJAS" />
        </a>
      </h4>

      <div id="collapseOne" class="panel-collapse collapse">
        <div class="panel-body">

          <div class="col-xs-12 col-sm-6">
            <ul class="ventajas-left"> 
              <?php echo $presSub3Model->Text4; ?>
            </ul>
          </div>  

          <div class="col-xs-12 col-sm-6">
            <ul class="ventajas-right">
              <?php echo $presSub3Model->Text5; ?>
            </ul>
          </div>

        </div>
      </div>

    </div>

  </div>


  <div class="row buen-padre">
    
    <div class="col-md-12 buen-padre-top"></div>
      
    <div class="col-md-12">
      
      <div class="row">
        
        <div class="col-xs-12 col-sm-4">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image9Url ?>" alt="" />
        </div>

        <div class="col-xs-12 col-sm-8">
          <p class="text-center"> <?php echo $presSub3Model->Text6; ?> </p>
        </div>

      </div>
      
    </div>

    <div class="col-md-12 desplegable">

      <div class="row">

        <div class="col-md-6">

          <div id="accordion">

            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->BtnImageUrl1 ?>" alt="VENTAJAS" />
              </a>
            </h4>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12">
                  <?php echo $presSub3Model->Text9; ?>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-md-6">

          <div id="accordion">

            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->BtnImageUrl2 ?>" alt="VENTAJAS" />
              </a>
            </h4>

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12">
                  <?php echo $presSub3Model->Text10; ?>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="col-md-12 buen-padre-bottom"></div>
  
  </div>

  <div class="row dudas">

    <div class="col-xs-12 col-sm-4">
      <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub3Model->Image10Url ?>" alt="" />
    </div>

    <div class="col-xs-12 col-sm-8">
      <p class="text-center"><?php echo $presSub3Model->Text11; ?></p>
    </div>

  </div>

  <div class="row curiosidades">

    <div id="accordion">

      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/title-curiosidades.png' ?>" alt="CURIOSIDADES" />
        </a>
      </h4>

      <div id="collapseFour" class="panel-collapse collapse">
        
        <div class="panel-body">
            
            <div class="row">
              
              <ul>
              
                <div class="col-xs-12 col-sm-6">
                  <?php echo $presSub3Model->Text12; ?>
                </div>

                <div class="col-xs-12 col-sm-6">
                  <?php echo $presSub3Model->Text13; ?>
                </div>

              </ul>

            </div>

        </div>

      </div>

    </div>

  </div>

  <div class="col-sm-12 btn-back">
    <p class="text-center">
      <?php $urlBack = Yii::app()->createUrl('site/presentaciones/'); ?>
      <a href="<?php echo $urlBack ?>" class="btn btn-warning" role="button"><strong>VOLVER</strong></a>
    </p>
  </div>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php $url1 = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub3Model->Prospecto1ImageUrl; ?>
        <p><img class="img-responsive" src="<?php echo $url1 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url1 ?>" target="_blank">Descargar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php $url2 = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub3Model->Prospecto2ImageUrl; ?>
        <p><img class="img-responsive" src="<?php echo $url2 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url2 ?>" target="_blank">Descargar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div><!-- /.container -->
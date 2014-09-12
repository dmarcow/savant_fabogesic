
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container presentaciones">

  <h3>Solución Pediátrica</h3>



  <!-- ROW -->
  <div class="row">
    <div class="col-xs-6 col-md-6">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- 400mg -->
          <div class="descripcion-producto">        
            <div class="row">
              <div class="col-md-12">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub4Model->Sub1ImageUrl ?>" alt="">
              </div>
              <div class="col-md-12">            
                <div class="row info-box bordered">
                  <div class="col-xs-12 col-md-12">
                    <p>Suspensión 2% - 1 frasco x 90ml</p>
                  </div>
                </div>            
              </div>  
            </div>        
          </div>
          <!-- 400mg -->
        </div>
       
        <div class="col-xs-12 col-md-12">

          <div class="col-xs-12 col-md-5"><a class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#modal1">Ver prospecto</a></div>
            
        </div>

      </div> 
    </div>

    <div class="col-xs-6 col-md-6">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- 600mg -->
          <div class="descripcion-producto">
            <div class="row">
              <div class="col-md-12">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub4Model->Sub2ImageUrl ?>" alt="">
              </div>
              <div class="col-md-12">            
                <div class="row info-box bordered">
                  <div class="col-xs-12 col-md-12">
                    <p>Suspensión  4% - 1 frasco x 90ml</p>
                  </div>
                </div>            
              </div>  
            </div>
          </div>
          <!-- 600mg -->
        </div>
        <div class="col-xs-12 col-md-12">

          <div class="col-xs-12 col-md-5"><a class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#modal2">Ver prospecto</a></div>

        </div>
      </div>
    </div>
  </div>  

  <div class="col-sm-12 btn-back">
    <p class="text-left">
      <?php $urlBack = Yii::app()->createUrl('site/presentaciones/'); ?>
      <a href="<?php echo $urlBack ?>" class="btn btn-warning" role="button"><strong>VOLVER</strong></a>
    </p>
  </div>

  <div class="row">
    <div class="bottom-logo"></div>
  </div>

</div><!-- /.container -->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php
            $url1 = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub4Model->Prospecto1ImageUrl;
            $url1pdf = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub4Model->Prospecto;
        ?>
        <p><img class="img-responsive" src="<?php echo $url1 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url1pdf ?>" target="_blank">Descargar</a>
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
        <?php
            $url2 = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub4Model->Prospecto2ImageUrl;
            $url2pdf = Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub4Model->Prospecto2;
        ?>
        <p><img class="img-responsive" src="<?php echo $url2 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url2pdf ?>" target="_blank">Descargar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





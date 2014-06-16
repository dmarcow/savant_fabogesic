<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container presentaciones">

  <h3>Comprimidos</h3>

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-sm-4">
      <div class="descripcion-producto">
        
        <div class="row">
          <div class="col-md-12">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub2Model->Sub1ImageUrl ?>" alt="400mg x 90 comprimidos">
          </div>
          <div class="col-md-12">
            
            <div class="row info-box bordered">

              <div class="col-xs-12 col-md-12">
                <p><?php echo $presSub2Model->Sub1Text; ?></p>
              </div>
              <div class="col-xs-12 col-md-12">
                <div class="row">
                  <div class="col-xs-12 col-md-7"><p class="text-warning"><strong>VENTA LIBRE</strong></p></div>
                  <div class="col-xs-12 col-md-5"><a class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#modal1">Ver prospecto</a></div>
                </div> 
              </div>

            </div>
            
          </div>  
        </div>
        
      </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
      <div class="descripcion-producto">

        <div class="row">
          
          <div class="col-md-12">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub2Model->Sub2ImageUrl ?>" alt="600mg x 20 comprimidos">
          </div>
          <div class="col-md-12">
            
            <div class="row info-box bordered">
              <div class="col-xs-12 col-md-12">
                <p><?php echo $presSub2Model->Sub2Text; ?></p>
              </div>
              <div class="col-xs-12 col-md-12">
                <div class="row">
                  <div class="col-xs-12 col-md-7"><p class="text-success"><strong>VENTA BAJO RECETA</strong></p></div>
                  <div class="col-xs-12 col-md-5"><a class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#modal2">Ver prospecto</a></div>
                </div> 
              </div>  

            </div>
            
          </div>

        </div>
        
      </div>
    </div><!-- /.col-sm-4 -->

    <div class="col-sm-4">
      <div class="descripcion-producto">
        
        <div class="row">
          
          <div class="col-md-12">
            <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $presSub2Model->Sub3ImageUrl ?>" alt="600mg x 90 comprimidos">
          </div>
          <div class="col-md-12">
            
            <div class="row info-box bordered">

              <div class="col-xs-12 col-md-12">
                <p><?php echo $presSub2Model->Sub3Text; ?></p>
              </div>
              <div class="col-xs-12 col-md-12">
                <div class="row">
                  <div class="col-xs-12 col-md-7"><p class="text-success"><strong>VENTA BAJO RECETA</strong></p></div>
                  <div class="col-xs-12 col-md-5"><a class="btn btn-primary btn-xs" role="button" data-toggle="modal" data-target="#modal2">Ver prospecto</a></div>
                </div> 
              </div>

            </div>
            
          </div>

        </div>
        
      </div>
    </div><!-- /.col-sm-4 -->
  </div><!-- /.row -->

  <div class="col-sm-12 btn-back">
    <p class="text-left">      
      <?php $urlBack = Yii::app()->createUrl('site/presentaciones/'); ?>
      <a href="<?php echo $urlBack ?>" class="btn btn-warning" role="button"><strong>VOLVER</strong></a>
    </p>
  </div>

  <div class="row">
    <div class="bottom-logo"></div>
  </div>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php $url400 =  Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub2Model->Sub1Link ?>
        <p><img class="img-responsive" src="<?php echo $url400 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url400 ?>" target="_blank">Descargar</a>
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
        <?php $url600 =  Yii::app()->theme->baseUrl . '/img/prospectos/' . $presSub2Model->Sub3Link ?>
        <p><img class="img-responsive" src="<?php echo $url600 ?>" /></p>
        <a role="button" class="btn btn-primary" href="<?php echo $url600 ?>" target="_blank">Descargar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div><!-- /.container -->
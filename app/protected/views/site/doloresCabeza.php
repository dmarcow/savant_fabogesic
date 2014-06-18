<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container usos-internas">

  <div class="header">
    <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/' . $doloresModel->CabezaImageUrl ?> " alt="DOLORES DE CABEZA" />
  </div>

  <!-- Three columns of text below the carousel -->
  <div class="row">

    <div class="col-sm-12">

      <div class="row">

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-que-es-dolor.png' ?> " alt="¿Qué es un dolor de cabeza?" />
              </a>
            </h4>

            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  
                  <p>Un dolor de cabeza es causado generalmente por arterias y vasos sanguíneos dilatados en tu cerebro. <br /><strong>Los más frecuentes son:</strong></p>

                </div>

                <div class="col-sm-12">
                  
                  <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                      
                      <ul>
                        <li class="tick tick-white">Leves</li>
                        <li class="tick tick-white">Tensionales</li>
                        <li class="tick tick-white">Migrañas</li>
                      </ul>

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
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-que-provoca.png' ?> " alt="¿Qué los provoca?" />
              </a>
            </h4>

            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  
                  <p>Los dolores de cabeza se deben a distintas razones. Algunos de los factores desencadenantes pueden ser:</p>

                </div>

                <div class="col-sm-12">
                  
                  <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                      
                      <ul>
                        <li class="tick tick-white">Malas posturas</li>
                        <li class="tick tick-white">Olores ambientales fuertes</li>
                        <li class="tick tick-white">Fatiga</li>
                        <li class="tick tick-white">Cambios en el clima</li>
                      </ul>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                      
                      <ul>
                        <li class="tick tick-white">Estrés</li>
                        <li class="tick tick-white">Depresión y ansiedad</li>
                        <li class="tick tick-white">Períodos menstruales</li>
                        <li class="tick tick-white">Deshidratación</li>
                      </ul>

                    </div>

                  </div>

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
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-prevenir.png' ?> " alt="¿Cómo puedo prevenir los dolores de cabeza?" />
              </a>
            </h4>

            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  
                  <ul>
                    <li class="tick tick-white">Utilizá técnicas de respiración y relajación durante períodos de stress o en forma preventiva para mantenerte calmo y relajado.</li>
                    <li class="tick tick-white">Mantenete en forma haciendo ejercicio en forma regular.</li>
                    <li class="tick tick-white">Asegurate de obtener 8 horas de sueño por noche.</li>
                    <li class="tick tick-white">Tomate descansos regulares  y buscá aire fresco.</li>
                    <li class="tick tick-white">No permanezcas en lugares cerrados prolongadamente.</li>
                    <li class="tick tick-white">Procurá la ventilación y la buena circulación del aire en tu hábitat.</li>
                    <li class="tick tick-white">Evitá el alcohol y el tabaco.</li>
                    <li class="tick tick-white">Bebé mucho líquido.</li>
                  </ul>

                </div>

              </div>
            </div>

          </div>

        </div>

        <div class="col-sm-6">
          
          <div id="accordion">

            <h4 class="panel-title margin30">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl . '/img/btn-como-prevenir.png' ?> " alt="¿Cómo puedo prevenir los dolores de cabeza?" />
              </a>
            </h4>

            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="col-sm-12 text-left">
                  
                  <p>No dejes de consultar a tu médico si percibís dolores anormales en forma prolongada.</p>

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
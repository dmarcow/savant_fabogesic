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
                  
                  <p>La artritis no tiene edad y la desintegración del cartílago puede darse por varias razones, incluyendo lesiones, herencia o enfermedad. La osteoartritis  se vuelve más frecuente con la edad, sin embargo, personas de todas las edades pueden ser afectadas por diferentes tipos de artritis.</p>

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
                  
                  <p>En algunas personas, la ruptura inicial de cartílago no provoca ningún dolor mientras que en otros casos el dolor se manifiesta sobre todo cuando te movés o tenés un largo período de inmovilidad, como a primera hora de la mañana o después de ver una película de larga duración o un viaje prolongado.</p>

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
                  
                  <p>- Incapacidad para mover una articulación normalmente.<br />
                    - Dolor recurrente o sensibilidad en cualquier articulación.<br />
                    - Hinchazón en una o más articulaciones.<br />
                    - Enrojecimiento o calor en la articulación.<br />
                    Si experimentás alguno de estos síntomas, debés consultar a tu médico tan pronto como sea posible.  El diagnóstico y tratamiento temprano pueden ayudar a limitar el daño y controlar los síntomas.</p>

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
                  
                  <p>Una combinación de ejercicio, algunos cambios de estilo de vida menores, una dieta adecuada y la medicación ayudan a controlar el dolor y los síntomas de la artritis.<br />
                  El ejercicio te ayuda a fortalecer los músculos que rodean la articulación afectada y colaboran a estabilizar la zona. Pequeños cambios en tu estilo de vida como tomar los objetos con las dos manos sumado a una dieta adecuada, que ayuda a sacar peso innecesario de tus articulaciones, contribuirán a tu salud en general y a tu estado de ánimo. Fabogesic puede ayudarte a aliviar temporalmente los dolores menores asociados con la artritis.</p>

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
                  
                  <p>Si sentís algunos de los síntomas antes explicados no dudes en consultar a un médico que puede diagnosticarte correctamente y ayudarte con un tratamiento adecuado o eventualmente derivarte con un médico reumatólogo o traumatólogo.</p>

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
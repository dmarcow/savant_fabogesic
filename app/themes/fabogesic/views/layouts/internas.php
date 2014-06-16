<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="author" content="ClaPat Studio">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/bootstrap-theme.min.css"> 
    <!-- Sticky Footer styles -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/sticky-footer-navbar.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/app.css">

    <!-- Fonts styles -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="bg-primary bg-presentaciones">



	<?php
		$UserName = "";
		if(!Yii::app()->user->isGuest){
			$userLogged = Usuario::model()->findByAttributes(array('Email'=>Yii::app()->user->id));
			$UserName = $userLogged->Nombre;
		}
	?>

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $this->createUrl('/site/')?>"><img src="<?php echo Yii::app()->theme->baseUrl . '/img/main-logo-inverse.png'?> " alt="Fabogesic"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
              	<li class="active"><a href="<?php echo $this->createUrl('/site/presentaciones') ?>">PRESENTACIONES</a></li>
                <li><a href="<?php echo $this->createUrl('/site/queEsIbuprofeno') ?>">¿QUÉ ES EL IBUPROFENO?</a></li>
                <li><a href="<?php echo $this->createUrl('/site/usosMasFrecuentes') ?>">USOS MÁS FRECUENTES</a></li>
                <li><a href="<?php echo $this->createUrl('/site/contact') ?>">CONTACTO</a></li>
                <?php if(!Yii::app()->user->isGuest ){ ?>
                	<li><a href="<?php echo $this->createUrl('/site/logout') ?>">LOGOUT ( <?php echo $UserName ?> )</a></li>
                <?php }
                if(Yii::app()->user->name != 0  && !Yii::app()->user->isGuest){ ?>
                	<li><a href="<?php echo $this->createUrl('/backOffice') ?>">BACKOFFICE</a></li>
                <?php } ?>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

	<?php echo $content; ?>



	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- Jquery -->
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/bootstrap.min.js"></script>
	<!-- My App Scripts -->
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/holder.js"></script>
	<!-- My App Scripts -->
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/assets/js/app.js"></script>

	<script>
	  $('#myModal').modal({
	      show: true
	  });
	</script>

	<!-- Google Analytics -->
	<script>

	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
	  { (i[r].q=i[r].q||[]).push(arguments)}

	  ,i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-51790155-1', 'fabogesic.com');
	  ga('send', 'pageview');

	</script>

</body>
</html>

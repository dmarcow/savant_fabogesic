<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex(){
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$model=EditableContent::model()->findByPk(1);
		$sliderModel = Slider::model()->findAll();
        $hbModel = HomeBoxes::model()->findAll();

		$this->render('index',array(
			'contentEdModel'=>$model,
			'sliders'=>$sliderModel,
            'hboxes'=>$hbModel,
		));
	}

	public function actionPresentaciones(){

		$this->layout="presentaciones";
		$model = PresentacionesEditable::model()->findByPk(1);

		$this->render('presentaciones',array(
			'presModel'=>$model,
		));
	}	

	public function actionPresentacionesSub1(){

		$this->layout="presentaciones";
		$model = PresentacionesSub1::model()->findByPk(1);

		$this->render('presentacionesSub1',array(
			'presSub1Model'=>$model,
		));
	}

	public function actionPresentacionesSub2(){

		$this->layout="presentaciones";
		$model = PresentacionesSub2::model()->findByPk(1);

		$this->render('presentacionesSub2',array(
			'presSub2Model'=>$model,
		));
	}

	public function actionPresentacionesSub3(){

		$this->layout="presentacionesSub3";
		$model = PresentacionesSub3::model()->findByPk(1);

		$this->render('presentacionesSub3',array(
			'presSub3Model'=>$model,
		));
	}

	public function actionPresentacionesSub4(){

		$this->layout="presentaciones";
		$model = PresentacionesSub4::model()->findByPk(1);

		$this->render('presentacionesSub4',array(
			'presSub4Model'=>$model,
		));
	}

	public function actionQueEsIbuprofeno(){

		$this->layout="queEsIbuprofeno";
		$model = QueEsIbuprofeno::model()->findByPk(1);

		$this->render('queEsIbuprofeno',array(
			'ibuproModel'=>$model,
		));
	}	

	public function actionProspectoIbuprofeno(){

		$this->layout="prospectoIbuprofeno";
		$model = ProspectoIbuprofeno::model()->findByPk(1);

		$this->render('prospectoIbuprofeno',array(
			'prospectoModel'=>$model,
		));
	}

	public function actionUsosMasFrecuentes(){

		$this->layout="usosFrecuentes";
		$model = UsosMasFrecuentes::model()->findByPk(1);
		$this->render('usosMasFrecuentes',array(
			'usosModel'=>$model,
		));
	}

	public function actionDoloresMusculares(){

		$this->layout="usosFrecuentes";
		$model = Dolores::model()->findByPk(1);

		$this->render('doloresMusculares',array(
			'doloresModel'=>$model,
		));
	}	

	public function actionDoloresPosturales(){

		$this->layout="usosFrecuentes";
		$model = Dolores::model()->findByPk(1);

		$this->render('doloresPosturales',array(
			'doloresModel'=>$model,
		));
	}	

	public function actionDoloresMenstruales(){

		$this->layout="usosFrecuentes";
		$model = Dolores::model()->findByPk(1);

		$this->render('doloresMenstruales',array(
			'doloresModel'=>$model,
		));
	}	

	public function actionDoloresCabeza(){

		$this->layout="usosFrecuentes";
		$model = DoloresCabeza::model()->findByPk(1);

		$this->render('doloresCabeza',array(
			'doloresModel'=>$model,
		));
	}	

	public function actionDoloresArticulares(){

		$this->layout="usosFrecuentes";
		$model = Dolores::model()->findByPk(1);
		
		$this->render('doloresArticulares',array(
			'doloresModel'=>$model,
		));
	}

	public function actionDoloresNinos(){

		$this->layout="usosFrecuentes";
		$model = Dolores::model()->findByPk(1);
		
		$this->render('doloresNinos',array(
			'doloresModel'=>$model,
		));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$this->layout="contacto";
		$model=new ContactForm;
		
		$attempt = $sent = false;

		$contactModel = Contacto::model()->findByPk(1);

		if(isset($_POST['ContactForm']))
		{
			
			$model->attributes=$_POST['ContactForm'];
			
			foreach($_POST['ContactForm'] as $name=>$value)
			{
			    $model->$name=$value;
			}

			if($model->validate()){
				$attempt = true;
				$sent = $this->sendEmail($model);
				if($sent)
					$model=new ContactForm;
			}

		}
		$this->render('contact',array(
			'model'=>$model,
			'contactModel'=>$contactModel,
			'sent'=>$sent,
			'attempt'=>$attempt,
		));
	}

	private function sendEmail($user){

		$retcode = false;

		Yii::import('application.extensions.phpmailer.JPhpMailer');

		$mail = new JPhpMailer;
		$mail->IsSMTP();

		/*$mail->SMTPAuth   = true;                  			// enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 			// sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      			// sets GMAIL as the SMTP server
		$mail->Port       = 465;                  			// set the SMTP port for the GMAIL server
		$mail->Username   = "desarrollowirall1@gmail.com";  // GMAIL username
		$mail->Password   = "P4ss10nfru1t";            		// GMAIL password*/

		$mail->SMTPAuth   = false;                  		// enable SMTP authentication
		$mail->Host       = "200.45.85.226";      			// sets GMAIL as the SMTP server
		//$mail->Host		= "190.210.142.82";
		//$mail->Port       = 25;                  			// set the SMTP port for the GMAIL server
		//$mail->Username   = "fabogesic";  					// GMAIL username
		//$mail->Password   = "Fa0553Ic";            			// GMAIL password

		$mail->SetFrom('comunicaciones@savant.com.ar', 'Fabogesic');
		$mail->Subject = 'Contacto';
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

		$body = '
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				  <title>Formulario Contacto</title>
				</head>
				<body bgcolor="#F1F1F2" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
				    <table bgcolor="#fff" border="0" align="center" cellpadding="10" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000;">
				        <tr>
				            <td width="580" align="center" valign="middle"><img style="display: block;" src="' . HTTP_AND_SERVER_CONST . Yii::app()->theme->baseUrl . '/img/main-logo-inverse.png"/></td>
				        </tr>
				        <tr>
				        	<td>Nombre: <strong> ' . $user->name. '</strong>.</td>
				        </tr>
				        <tr>
				        	<td>Apellido: <strong> ' . $user->lastname . '</strong>.</td>
				        </tr>
				        <tr>
				        	<td>Email: <strong> ' . $user->subject . '</strong>.</td>
				        </tr>
				        <tr>
				        	<td><strong>' . $user->body . '</strong></td>
				        </tr>
				    </table>
				</body>
				</html>
		';

		$mail->MsgHTML($body); 
		$mail->AddAddress("comunicaciones@savant.com.ar", $user->limpiar($user->name) . " " . $user->limpiar($user->lastname));
        //$mail->AddAddress("guillermo@wirallinteractive.com.ar", $user->limpiar($user->name) . " " . $user->limpiar($user->lastname));
		//$mail->SMTPDebug = 2; // 2 to enable SMTP debug information
		//$mail->Debugoutput = 'html';
		$retcode = $mail->Send();
		
		return $retcode;
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
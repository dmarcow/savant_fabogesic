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

		$this->render('index',array(
			'contentEdModel'=>$model,
			'sliders'=>$sliderModel,
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
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
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
<?php

class SliderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('1'),
			),
			array('deny',  // deny all users
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Slider;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Slider']))
		{
	      $model->setAttributes($_POST['Slider']);
	      
	      $rnd = time(); //nro  para prefijo al guardar la imagen, para evitar conflictos si existen 2 imagenes llamadas igual.
	      $uploadedFile = CUploadedFile::getInstance($model, 'FImageUrl');
	      if (!empty($uploadedFile)) {
            $model->ImageUrl = $uploadedFile;
	        $extension = substr(strrchr($uploadedFile, '.'), 1);
	        $fileName = "slide_{$rnd}." . $extension;  // numero aleatorio  + nombre de archivo
	        $model->ImageUrl = str_replace(' ', '_', $fileName);
			$now = date("Y-m-d H:i:s"); 
	        $model->FechaCreacion = $now;
	        $model->FechaModificacion = $now;
	      }
	      
	      if ($model->save()) {
	        if (!empty($uploadedFile)) {
	          //$uploadedFile->saveAs(Yii::app()->basePath . '/../upload/images/slides/' . $fileName); 
	          $uploadedFile->saveAs(Yii::app()->basePath . '/../' . SLIDE_IMAGES_PATH . $fileName); 
              $file = SLIDE_IMAGES_PATH . $model->ImageUrl;

	          $img = Yii::app()->simpleImage->load($file);
	          $img->resizeToWidth(250);
	          $img->save(SLIDE_THUMBS_IMAGES_PATH . "{$model->ImageUrl}");
	        }

	        if (Yii::app()->getRequest()->getIsAjaxRequest())
	          Yii::app()->end();
	        else
	          $this->redirect(array('index', '#' => $model->id));
	      }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);


	    if (isset($_POST['Slider'])) {

	      $_POST['Slider']['ImageUrl'] = str_replace(' ', '_', $model->ImageUrl);
	      $model->setAttributes($_POST['Slider']);

	      $uploadedFile = CUploadedFile::getInstance($model, 'FImageUrl');
          if (!empty($uploadedFile)) 
            $model->ImageUrl = $uploadedFile;

       	  $model->FechaModificacion = date("Y-m-d H:i:s");

	      if ($model->save()) {
	        if (!empty($uploadedFile)) {  // checkeamos si el archivo subido esta seteado o no
	      	  
	          $uploadedFile->saveAs(Yii::app()->basePath . '/../' . SLIDE_IMAGES_PATH  . $model->ImageUrl); 
              $file = SLIDE_IMAGES_PATH . $model->ImageUrl;

	          $img = Yii::app()->simpleImage->load($file);
	          $img->resizeToWidth(250);
	          $img->save(SLIDE_THUMBS_IMAGES_PATH . "{$model->ImageUrl}");
	        }
	        $this->redirect(array('index', '#' => $model->id));
	      }
	    }

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Slider');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Slider('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Slider']))
			$model->attributes=$_GET['Slider'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Slider the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Slider::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Slider $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='slider-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

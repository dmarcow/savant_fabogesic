<?php

class PresentacionesSub2Controller extends Controller
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
		$model=new PresentacionesSub2;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PresentacionesSub2']))
		{
			$model->attributes=$_POST['PresentacionesSub2'];
       	  	$model->FechaCreacion = date("Y-m-d H:i:s");
       	  	$model->FechaModificacion = date("Y-m-d H:i:s");

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PresentacionesSub2']))
		{
			$model->attributes=$_POST['PresentacionesSub2'];
       	  	$model->FechaModificacion = date("Y-m-d H:i:s");

            $basePath = Yii::app()->theme->basePath . '/img/';

       	  	$uploadedFile1 = CUploadedFile::getInstance($model, 'FSub1ImageUrl');
            if(!empty($uploadedFile1))
                $model->Sub1ImageUrl = $uploadedFile1;

       	  	$uploadedFile2 = CUploadedFile::getInstance($model, 'FSub2ImageUrl');
            if(!empty($uploadedFile2))
            {
                $model->Sub2ImageUrl = $uploadedFile2;
                $model->Sub3ImageUrl = $uploadedFile2;
       	  	}

            $uploadedFile3 = CUploadedFile::getInstance($model,'FSub1Link');
            if(!empty($uploadedFile3))
                $model->Sub1Link = $uploadedFile3;

            $uploadedFile4 = CUploadedFile::getInstance($model,'FSub2Link');
            if(!empty($uploadedFile4))
            {
                $model->Sub2Link = $uploadedFile4;
                $model->Sub3Link = $uploadedFile4;
            }

            $uploadedFile5 = CUploadedFile::getInstance($model,'ProspectoFile');
            if(!empty($uploadedFile5))
                $model->Prospecto = $uploadedFile5;

            $uploadedFile6 = CUploadedFile::getInstance($model,'ProspectoFile2');
            if(!empty($uploadedFile6))
                $model->Prospecto2 = $uploadedFile6;

			if($model->save())
            {
				 if(!empty($uploadedFile1))
                 {
                     $uploadedFile1->saveAs($basePath . $uploadedFile1);
                 }
                 if(!empty($uploadedFile2))
                 {
                     $uploadedFile2->saveAs($basePath . $uploadedFile2);
                 }
                 if(!empty($uploadedFile3))
                 {
                     $uploadedFile3->saveAs($basePath . '/prospectos/'.$uploadedFile3);
                 }
                 if(!empty($uploadedFile4))
                 {
                     $uploadedFile4->saveAs($basePath . '/prospectos/'.$uploadedFile4);
                 }

                 if(!empty($uploadedFile5))
                 {
                     $uploadedFile5->saveAs($basePath . '/prospectos/'.$uploadedFile5);
                 }
                 if(!empty($uploadedFile6))
                 {
                     $uploadedFile6->saveAs($basePath . '/prospectos/'.$uploadedFile6);
                 }

				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('PresentacionesSub2');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PresentacionesSub2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PresentacionesSub2']))
			$model->attributes=$_GET['PresentacionesSub2'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PresentacionesSub2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PresentacionesSub2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PresentacionesSub2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='presentaciones-sub2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

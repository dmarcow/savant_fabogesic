<?php

class PresentacionesSub3Controller extends Controller
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
		$model=new PresentacionesSub3;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PresentacionesSub3']))
		{
			$model->attributes=$_POST['PresentacionesSub3'];
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

		if(isset($_POST['PresentacionesSub3']))
		{
			$model->attributes=$_POST['PresentacionesSub3'];
       	  	$model->FechaModificacion = date("Y-m-d H:i:s");
       	  	
            $basePath = Yii::app()->theme->basePath . '/img/';

            $uploadedFile1 = CUploadedFile::getInstance($model, 'FImage1Url');
            if(!empty($uploadedFile1))
                $model->Image1Url = $uploadedFile1;

            $uploadedFile2 = CUploadedFile::getInstance($model, 'FImage2Url');
            if(!empty($uploadedFile2))
                $model->Image2Url = $uploadedFile2;

            $uploadedFile3 = CUploadedFile::getInstance($model, 'FImage3Url');
            if(!empty($uploadedFile3))
                $model->Image3Url = $uploadedFile3;

            $uploadedFile4 = CUploadedFile::getInstance($model, 'FImage4Url');
            if(!empty($uploadedFile4))
                $model->Image4Url = $uploadedFile4;

            $uploadedFile5 = CUploadedFile::getInstance($model, 'FImage5Url');
            if(!empty($uploadedFile5))
                $model->Image5Url = $uploadedFile5;

            $uploadedFile6 = CUploadedFile::getInstance($model, 'FImage6Url');
            if(!empty($uploadedFile6))
                $model->Image6Url = $uploadedFile6;

            $uploadedFile7 = CUploadedFile::getInstance($model, 'FImage7Url');
            if(!empty($uploadedFile7))
                $model->Image7Url = $uploadedFile7;

            $uploadedFile8 = CUploadedFile::getInstance($model, 'FImage8Url');
            if(!empty($uploadedFile8))
                $model->Image8Url = $uploadedFile8;

            $uploadedFile9 = CUploadedFile::getInstance($model, 'FImage9Url');
            if(!empty($uploadedFile9))
                $model->Image9Url = $uploadedFile9;

            $uploadedFile10 = CUploadedFile::getInstance($model, 'FImage10Url');
            if(!empty($uploadedFile10))
                $model->Image10Url = $uploadedFile10;

            $uploadedFile11 = CUploadedFile::getInstance($model, 'FBtnImageUrl1');
            if(!empty($uploadedFile11))
                $model->BtnImageUrl1 = $uploadedFile11;

            $uploadedFile12 = CUploadedFile::getInstance($model, 'FBtnImageUrl2');
            if(!empty($uploadedFile12))
                $model->BtnImageUrl2 = $uploadedFile12;

            $uploadedFile13 = CUploadedFile::getInstance($model, 'FProspecto1ImageUrl');
            if(!empty($uploadedFile13))
                $model->Prospecto1ImageUrl = $uploadedFile13;

            $uploadedFile14 = CUploadedFile::getInstance($model, 'FProspecto2ImageUrl');
            if(!empty($uploadedFile14))
                $model->Prospecto2ImageUrl = $uploadedFile14;

            $uploadedFile15 = CUploadedFile::getInstance($model,'ProspectoFile');
            if(!empty($uploadedFile15))
                $model->Prospecto = $uploadedFile15;

            $uploadedFile16 = CUploadedFile::getInstance($model,'ProspectoFile2');
            if(!empty($uploadedFile16))
                $model->Prospecto2 = $uploadedFile16;

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
                    $uploadedFile3->saveAs($basePath . $uploadedFile3);
                }
				if(!empty($uploadedFile4))
                {
                    $uploadedFile4->saveAs($basePath . $uploadedFile4);
                }
				if(!empty($uploadedFile5))
                {
                    $uploadedFile5->saveAs($basePath . $uploadedFile5);
                }
				if(!empty($uploadedFile6))
                {
                    $uploadedFile6->saveAs($basePath . $uploadedFile6);
                }
				if(!empty($uploadedFile7))
                {
                    $uploadedFile7->saveAs($basePath . $uploadedFile7);
                }
				if(!empty($uploadedFile8))
                {
                    $uploadedFile8->saveAs($basePath . $uploadedFile8);
                }
				if(!empty($uploadedFile9))
                {
                    $uploadedFile9->saveAs($basePath . $uploadedFile9);
                }
				if(!empty($uploadedFile10))
                {
                    $uploadedFile10->saveAs($basePath . $uploadedFile10);
                }
				if(!empty($uploadedFile11))
                {
                    $uploadedFile11->saveAs($basePath . $uploadedFile11);
                }
				if(!empty($uploadedFile12))
                {
                    $uploadedFile12->saveAs($basePath . $uploadedFile12);
                }
				if(!empty($uploadedFile13))
                {
                    $uploadedFile13->saveAs($basePath .'/prospectos/'. $uploadedFile13);
                }
				if(!empty($uploadedFile14))
                {
                    $uploadedFile14->saveAs($basePath .'/prospectos/'. $uploadedFile14);
                }
                if(!empty($uploadedFile15))
                {
                    $uploadedFile15->saveAs($basePath . '/prospectos/'.$uploadedFile15);
                }
                if(!empty($uploadedFile16))
                {
                    $uploadedFile16->saveAs($basePath . '/prospectos/'.$uploadedFile16);
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
		$dataProvider=new CActiveDataProvider('PresentacionesSub3');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PresentacionesSub3('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PresentacionesSub3']))
			$model->attributes=$_GET['PresentacionesSub3'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PresentacionesSub3 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PresentacionesSub3::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PresentacionesSub3 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='presentaciones-sub3-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

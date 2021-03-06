<?php

class DoloresController extends Controller
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
		$model=new Dolores;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dolores']))
		{
			$model->attributes=$_POST['Dolores'];
			$now = date("Y-m-d H:i:s"); 
	        $model->FechaCreacion = $now;
	        $model->FechaModificacion = $now;

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

		if(isset($_POST['Dolores']))
		{
			$model->attributes=$_POST['Dolores'];
	        $model->FechaModificacion = date("Y-m-d H:i:s");
			
			$basePath = Yii::app()->theme->basePath . '/img/'; 

            $uploadedFile1 = CUploadedFile::getInstance($model, 'FMuscularesImageUrl');
            if(!empty($uploadedFile1))
                $model->MuscularesImageUrl = $uploadedFile1;

            $uploadedFile2 = CUploadedFile::getInstance($model, 'FPosturalesImageUrl');
            if(!empty($uploadedFile2))
                $model->PosturalesImageUrl = $uploadedFile2;

            $uploadedFile3 = CUploadedFile::getInstance($model, 'FMenstrualesImageUrl');
            if(!empty($uploadedFile3))
                $model->MenstrualesImageUrl = $uploadedFile3;

            $uploadedFile4 = CUploadedFile::getInstance($model, 'FMenstrualesSub2ImageUrl');
            if(!empty($uploadedFile4))
                $model->MenstrualesSub2ImageUrl = $uploadedFile4;

            $uploadedFile5 = CUploadedFile::getInstance($model, 'FArticularesImageUrl');
            if(!empty($uploadedFile5))
                $model->ArticularesImageUrl = $uploadedFile5;

            $uploadedFile6 = CUploadedFile::getInstance($model, 'FNinosImageUrl');
            if(!empty($uploadedFile6))
                $model->NinosImageUrl = $uploadedFile6;

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
		$dataProvider=new CActiveDataProvider('Dolores');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dolores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dolores']))
			$model->attributes=$_GET['Dolores'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dolores the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dolores::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dolores $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dolores-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

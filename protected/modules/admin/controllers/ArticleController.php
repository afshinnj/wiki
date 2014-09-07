<?php

class ArticleController extends My_Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}
   public function actions()
    {
			return array(
            'imageUpload'=>array(
                'class'=>'ext.redactor.actions.ImageUpload',
                //'uploadPath'=>'images/',
               // 'uploadUrl'=>'/url/to/uploads/folder',
                'uploadCreate'=>true,
                'permissions'=>0755,
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
		$model=new Article;
		$Section = new Section;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('/article.html'));
		}

		$this->render('create',array(
			'model'=>$model,
			'section' => $Section->Sections
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
		$Section = new Section;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('/article.html'));
		}

		$this->render('update',array(
			'model'=>$model,
			'section' => $Section->Sections
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
			$this->redirect(array('/article.html'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		$dataProvider=new CActiveDataProvider('Article', array(
			'criteria' => array(
				'with' => array('section'),
				'order' => 't.create_time DESC'
			)
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Article the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Article $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionUpload()
	{
		$dir = '../../../uploads/';
			if(isset($_FILES['file']['type'])){
			$_FILES['file']['type'] = strtolower($_FILES['file']['type']);
			 
			if ($_FILES['file']['type'] == 'image/png' 
			|| $_FILES['file']['type'] == 'image/jpg' 
			|| $_FILES['file']['type'] == 'image/gif' 
			|| $_FILES['file']['type'] == 'image/jpeg'
			|| $_FILES['file']['type'] == 'image/pjpeg')
			{	
				// setting file's mysterious name
				$filename = md5(date('YmdHis')).'.jpg';
				$file = $dir.$filename;
			
				// copying
				copy($_FILES['file']['tmp_name'], $file);
			
				// displaying file    
				$array = array(
					'filelink' => dirname($_SERVER['PHP_SELF']) . '/../../uploads/'.$filename
				);
				
				echo stripslashes(json_encode($array));   
				
			}	
				} 
		
	}
}

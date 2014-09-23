<?php

class SiteController extends Controller
{
	
	
	public $layout='//layouts/column2';
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
	public function actionIndex()
	{
		
		
		$section = new Section;
		
		$article = new Article;
		
		$dataProvider=new CActiveDataProvider('Section', array(
				'criteria' => array(
						'with' => array('collections'),
						'order' => 't.create_time ASC',
				)
		));
		$this->render('post',
					   array(
							'sec' => $section->Section, 
							'article' => $article->Article,
					   		'dataProvider' => $dataProvider
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

	public function actionArticle()
	{
		
	
		$section = new Section;
		$article = new Article;
		
		$id = (int) $_GET['id'];
		$dataProvider=new CActiveDataProvider('Article', array(
			'criteria' => array(
				//'with' => array('section'),
				'order' => 't.create_time DESC',
				 'condition' => 'id = :id',
				'params' => array(':id' => $id)	 
			)
		));
		$this->render('index',
					   array(
							'sec' => $section->Section, 
							'dataProvider' => $dataProvider,
							'article' => $article->Article,
							));
		
	}

	
	public function actionSection()
	{
	
		$section = new Section;
		$article = new Article;
	
		$id = (int) $_GET['id'];
		$dataProvider=new CActiveDataProvider('Article', array(
				'criteria' => array(
						//'with' => array('section'),
						'order' => 't.create_time DESC',
					 'condition' => 'section_id = :id',
						'params' => array(':id' => $id)
				)
		));
		$this->render('index',
				array(
						'sec' => $section->Section,
						'dataProvider' => $dataProvider,
						'article' => $article->Article,
				));
	
	}

}
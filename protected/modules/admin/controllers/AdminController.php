<?php

class AdminController extends My_Controller
{

	public $layout='/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
		/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		$this->render('index');
	}

}
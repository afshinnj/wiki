<?php

class AdminModule extends CWebModule
{
	public $homeUrl="/admin/";
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
		$this->layout = 'main';
	}

        public function beforeControllerAction($controller, $action)
        {
        Yii::app()->user->loginUrl = array('admlogin');
        return parent::beforeControllerAction($controller, $action);
        }
}

<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class My_Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='/layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
		
	public $t = 'fa_ir';
	
/*	public function init(){
				// import class paths for captcha extended
			Yii::$classMap = array_merge( Yii::$classMap, array(
					'CaptchaExtendedAction' => Yii::getPathOfAlias('ext.captcha').DIRECTORY_SEPARATOR.'CaptchaExtendedAction.php',
					'CaptchaExtendedValidator' => Yii::getPathOfAlias('ext.captcha').DIRECTORY_SEPARATOR.'CaptchaExtendedValidator.php'
				));
    }*/
	public function accessRules()
	{
		return array(
			array('allow',  
				//'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
//	public function actions()
//	{
//		 return array(
//		  // captcha action renders the CAPTCHA image displayed on the contact page
//		  'captcha'=>array(
//		   'class'=>'CCaptchaAction',
//		   'backColor'=>0xFFFFFF,
//		  ),
//		 );
//		 
//
//	}
	

	

}
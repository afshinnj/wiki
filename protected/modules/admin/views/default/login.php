<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - '. Yii::t($this->t,'Login') ; 
$this->breadcrumbs=array(
	Yii::t($this->t,'Login'),
);
		$password = '123456';
		$salt = '$2a$13$43p2SQMbdj'.$password.'hjRdxTFZZVEOEfJEWkKyS3LTg36reWDer6SrXJ1YMai'.md5($password);
		$salt_1 = '9iwUAQb!BqRYJY3N4urC!TzX9%dFwiChxmLRK!UHcKVTqZ9QG3kvpA4pRZXwqOn&mi*F%&3b9VhFxSyKIlD&b$RQZx5gL!zbBbgl';
		$pass = sha1($salt.$password.$salt_1);
		//echo  CPasswordHelper::hashPassword($pass);
?>
<style>
.form{
	border:1px solid #C9E0ED;
	border-radius:5px;
	width:300px;
	margin:70px auto 0 auto;
	padding:10px;
	background:#FFF !important;	
	}
.textField{
	border:1px solid #CCC;
	border-radius:5px;
	width:290px;
	height:30px;
	padding-right:5px;
	padding-left:5px;
	}
.buttons{
	text-align:center;
	}
.loginBtn{
	width:70px;
	height:30px;
	}
.footer{
	padding-top:10px;
	text-align:center;	
	}			
</style>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'textField')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('class'=>'textField')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t($this->t,'Login'),array('class'=>'loginBtn')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<p class="footer">تومیتو بلاگ نسخه 1 بتا</p>

</body>
</html>


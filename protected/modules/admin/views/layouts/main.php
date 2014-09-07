<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/editor/css/redactor.css" />
    <script language="javascript" src="<?php echo Yii::app()->request->baseUrl;?>/editor/js/jquery-1.8.2.js"></script>
    <script language="javascript" src="<?php echo Yii::app()->request->baseUrl;?>/editor/js/redactor.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <script language="javascript">
    $(document).ready(function(e) {
      
                $('.redactor_content').redactor({
					imageUpload: '<?php echo Yii::app()->request->baseUrl;?>/editor/scripts/image_upload.php',
                    lang: 'fa',
                    direction:'rtl',
                    autoresize: true
                });
    });

    </script>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'مدیریت', 'url'=>array('/admin')),
				array('label'=>'ایجاد کاربر', 'url'=>array('/user.html')),
				array('label'=>'ایجاد بخش', 'url'=>array('/section.html')),
				array('label'=>'نوشتن مقاله', 'url'=>array('/article.html')),
				
				array('label'=>'خروج ('.Yii::app()->user->name.')', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' > ',
   			'homeLink' => CHtml::link('مدیریت', Yii::app()->homeUrl.'admin')
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->

</body>
</html>

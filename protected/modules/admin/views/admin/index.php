<?php
/* @var $this AdminController */
$this->menu=array(
	array('label'=>'ایجاد کاربر', 'url'=>array('/user')),
	array('label'=>'ایجاد بخش', 'url'=>array('/section')),
	array('label'=>'نوشتن مقاله', 'url'=>array('/article')),
);
$this->breadcrumbs=array( 
	Yii::t($this->t,'Admin'),
);
?>

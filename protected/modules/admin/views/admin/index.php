<?php
/* @var $this AdminController */
$this->menu=array(
	array('label'=>'ایجاد کاربر', 'url'=>array('/user.html')),
	array('label'=>'ایجاد گروه', 'url'=>array('/section.html')),
	array('label'=> 'ایجاد زیر گروه', 'url' => array('/subSection.html')),
	array('label'=>'نوشتن مقاله', 'url'=>array('/article.html')),
);
$this->breadcrumbs=array( 
	Yii::t($this->t,'Admin'),
);
?>

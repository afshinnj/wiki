<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	Yii::t($this->t,'Users')=>array('/user.html'),
	Yii::t($this->t,'Create'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List User'), 'url'=>array('/user.html')),
);
?>

<h1><?php echo Yii::t($this->t,'Create User')?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
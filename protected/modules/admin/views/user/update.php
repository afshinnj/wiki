<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	Yii::t($this->t,'Users')=>array('/user.html'),
	$model->first_name .' '. $model->last_name,
	Yii::t($this->t,'Update'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List User'), 'url'=>array('/user.html')),
	array('label'=>Yii::t($this->t,'Create User'), 'url'=>array('create')),
	array('label'=>Yii::t($this->t,'Delete User'), 'url'=>array('delete', 'id'=>$model->id)),
);
?>

<h1><?php echo Yii::t($this->t,'Update User')?> <?php echo $model->first_name .' '. $model->last_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CollectionController */
/* @var $model Collection */

$this->breadcrumbs=array(
	Yii::t($this->t,'Collections')=>array('index'),
	Yii::t($this->t,'Create'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Collection'), 'url'=>array('/subSection.html')),
	//array('label'=>'Manage Collection', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t($this->t,'Create Collection')?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'section'=>$section)); ?>

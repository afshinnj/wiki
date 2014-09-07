<?php
/* @var $this SectionController */
/* @var $model Section */

$this->breadcrumbs=array(
	Yii::t($this->t,'Sections')=>array('/section.html'),
	$model->title,
	Yii::t($this->t,'Update'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Section'), 'url'=>array('/section.html')),
	array('label'=>Yii::t($this->t,'Create Section'), 'url'=>array('create')),
	array('label'=>Yii::t($this->t,'Delete Section'), 'url'=>array('delete', 'id'=>$model->id)),
);
?>

<h1><?php echo Yii::t($this->t,'Update Section')?> : <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
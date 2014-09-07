<?php
/* @var $this SectionController */
/* @var $model Section */

$this->breadcrumbs=array(
	Yii::t($this->t,'Sections')=>array('/section.html'),
	Yii::t($this->t,'Create'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Section'), 'url'=>array('/section.html')),
	
);
?>

<h1><?php echo Yii::t($this->t,'Create Section')?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
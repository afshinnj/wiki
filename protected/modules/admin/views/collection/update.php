<?php
/* @var $this CollectionController */
/* @var $model Collection */

$this->breadcrumbs=array(
	Yii::t($this->t,'Collections')=>array('index'),
	$model->sub_section_id=>array('view','id'=>$model->sub_section_title),
	Yii::t($this->t,'Update'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Collection'), 'url'=>array('/subSection.html')),
	array('label'=>Yii::t($this->t,'Create Collection'), 'url'=>array('create')),
	array('label'=>Yii::t($this->t,'Delete Collection'), 'url'=>array('delete', 'id'=>$model->sub_section_id)),
);
?>

<h1> <?php echo Yii::t($this->t,'Update Collection'). " : " .$model->sub_section_title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'section'=>$section)); ?>
<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	Yii::t($this->t,'Articles')=>array('/article.html'),
	$model->title,
	Yii::t($this->t,'Update'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Article'), 'url'=>array('/article.html')),
	array('label'=>Yii::t($this->t,'Create Article'), 'url'=>array('create')),
	array('label'=>Yii::t($this->t,'Delete Article'), 'url'=>array('delete', 'id'=>$model->id)),
	
);
?>

<h1><?php echo Yii::t($this->t,'Update Article')?> : <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'section'=>$section)); ?> 
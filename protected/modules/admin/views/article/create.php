<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	Yii::t($this->t,'Articles')=>array('/article.html'),
	Yii::t($this->t,'Create'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'List Article'), 'url'=>array('/article.html')),
	
);
?>

<h1><?php echo Yii::t($this->t,'Create Article')?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'section'=>$section,'subSection'=>$subSection)); ?>
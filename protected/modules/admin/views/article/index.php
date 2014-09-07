<?php
/* @var $this ArticleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t($this->t,'Articles'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'Create Article'), 'url'=>array('create')),
	
);
?>

<h1><?php echo Yii::t($this->t,'Articles')?></h1>

<div class="table-responsive">
<table class="table table-bordered">
<tr>
    <td class="dir-rtl"><b><?php echo Yii::t($this->t,'Title'); ?></b></td>
  	<td></td>
 </tr>
   	<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>	
</table>
</div>

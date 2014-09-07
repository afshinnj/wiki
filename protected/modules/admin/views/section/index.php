<?php
/* @var $this SectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t($this->t,'Sections'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'Create Section'), 'url'=>array('create')),
	//array('label'=>Yii::t($this->t,'Manage Section'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t($this->t,'Sections')?></h1>

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


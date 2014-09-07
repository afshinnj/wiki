<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t($this->t,'Users'),
);

$this->menu=array(
	array('label'=>Yii::t($this->t,'Create User'), 'url'=>array('create')),
	//array('label'=>Yii::t($this->t,'Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t($this->t,'Users');?></h1>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
    <td class="dir-rtl"><b><?php echo Yii::t($this->t,'First Name'); ?></b></td>
  	<td class="dir-rtl"><b><?php echo Yii::t($this->t,'Last Name'); ?></b></td>
  	<td class="dir-rtl"><b><?php echo Yii::t($this->t,'Username'); ?></b></td>
  	<td></td>
 </tr>
   	<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>	
</table>
</div>




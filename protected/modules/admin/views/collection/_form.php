<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'collection-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t($this->t,'Fields with')?> <span class="required">*</span><?php echo Yii::t($this->t,'are required.')?></p>


	<div class="row">
		<?php echo $form->labelEx($model,'main_section_id'); ?>
		<?php echo $form->dropDownList($model,'main_section_id',$section); ?>
		<?php echo $form->error($model,'main_section_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_section_title'); ?>
		<?php echo $form->textField($model,'sub_section_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sub_section_title'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t($this->t,'Create') : Yii::t($this->t,'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
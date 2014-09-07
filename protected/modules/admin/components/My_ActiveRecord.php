<?php
abstract class My_ActiveRecord extends CActiveRecord
{
	public $t = 'fa_ir';
	 /**
	 * Prepares create_user_id and update_user_id attributes before saving.
	 */
		
	protected function beforeSave()
	{
		
		if($this->isNewRecord= TRUE){
			$this->create_time = Yii::app()->jdate->date("Y-m-d H:i:s",false,false);
			$this->update_time = Yii::app()->jdate->date("Y-m-d H:i:s",false,false);

		}
		else {
			$this->update_time = Yii::app()->jdate->date("Y-m-d H:i:s",false,false);
					
			
			}
		return parent::beforeSave();
		   
	}

		
}

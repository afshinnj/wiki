<?php

class Section extends My_ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{section}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title','required'),
			array('title', 'length', 'max'=>255),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'articles' => array(self::HAS_MANY, 'Article', 'section_id'),
			'collections' => array(self::HAS_MANY, 'Collection', 'main_section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t($this->t,'ID'),
			'title' => Yii::t($this->t,'Title'), 
		);
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Section the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
	public function getSection()
	{
		$model = Section::model()->findAll();
		     $array = array();
                foreach ($model as $filde) {
				   $array[] = array('label' => $filde->title, 'url' => array('ls/'.$filde->id));
                } 
		return $array;
	}
	
	public function getSections()
	{
		$model = Section::model()->findAll();
		$array = array();
		foreach ($model as $filde) {
			 $array[$filde->id] = $filde->title;
		}
		return $array;
	}
}

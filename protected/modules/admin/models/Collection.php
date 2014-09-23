<?php

class Collection extends My_ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sub_section}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('main_section_id, sub_section_title', 'required'),
			array('main_section_id', 'numerical', 'integerOnly'=>true),
			array('sub_section_title', 'length', 'max'=>255),

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
				'section' => array(self::BELONGS_TO, 'Section', 'main_section_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sub_section_id' => 'Sub Section',
			'main_section_id' => Yii::t($this->t,'Main Section'),
			'sub_section_title' => Yii::t($this->t,'Sub Section Title'),
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
		);
	}
	public function getsubSections()
	{
		$model = Collection::model()->findAll();
		$array = array();
		foreach ($model as $filde) {
			$array[$filde->sub_section_id] = $filde->sub_section_title;
		}
		return $array;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Collection the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

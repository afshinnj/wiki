<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property integer $section_id
 * @property string $create_time
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Section $section
 */
class Article extends My_ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, section_id, sub_sectionId, text', 'required'),
			array('section_id, sub_sectionId', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			array('text', 'safe'),
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
			'section' => array(self::BELONGS_TO, 'Section', 'section_id'),
			'subSection' => array(self::BELONGS_TO, 'Collection', 'sub_section_id'),
			//'subSection' => array(self::BELONGS_TO, 'SubSection', 'sub_section_id'),
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
			'text' => Yii::t($this->t,'Text'),
			'section_id' => Yii::t($this->t,'Section'),
			'sub_sectionId' => Yii::t($this->t,'Sub Section'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public function getArticle()
	{
		     $model = Article::model()->findAll(array('order'=>'t.create_time DESC'));
		     $array = array();
                foreach ($model as $filde) {
				   $array[] = array('label' => $filde->title, 'url' => array('post/'.$filde->id));
                } 
		return $array;
	}
	
}

<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $create_time
 * @property string $update_time
 * @property string $password
 */
class User extends My_ActiveRecord
{
	public $update = false; 
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name, username, password', 'required'),
			array('first_name, last_name, username, password', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, username, create_time, update_time, password', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => Yii::t($this->t,'First Name'),
			'last_name' =>  Yii::t($this->t,'Last Name'),
			'username' =>  Yii::t($this->t,'Username'),
			'password' =>  Yii::t($this->t,'Password'),
		);
	}
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * apply a hash on the password before we store it in the database
	 */
	protected function afterValidate()
	{   
		parent::afterValidate();
		//ensure we don't have any other errors
		if(!$this->hasErrors() AND $this->update == false ){  
			
			$this->password = $this->hashPassword($this->password);                     
		}
	}
	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{

		$salt = '$2a$13$43p2SQMbdj'.$password.'hjRdxTFZZVEOEfJEWkKyS3LTg36reWDer6SrXJ1YMai'.md5($password);
		$salt_1 = '9iwUAQb!BqRYJY3N4urC!TzX9%dFwiChxmLRK!UHcKVTqZ9QG3kvpA4pRZXwqOn&mi*F%&3b9VhFxSyKIlD&b$RQZx5gL!zbBbgl';
		$pass = sha1($salt.$password.$salt_1);
		return CPasswordHelper::hashPassword($pass);
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{

		$salt = '$2a$13$43p2SQMbdj'.$password.'hjRdxTFZZVEOEfJEWkKyS3LTg36reWDer6SrXJ1YMai'.md5($password);
		$salt_1 = '9iwUAQb!BqRYJY3N4urC!TzX9%dFwiChxmLRK!UHcKVTqZ9QG3kvpA4pRZXwqOn&mi*F%&3b9VhFxSyKIlD&b$RQZx5gL!zbBbgl';
		$pass = sha1($salt.$password.$salt_1);
		return  CPasswordHelper::verifyPassword($pass, $this->password);

	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "sp_users".
 *
 * The followings are the available columns in table 'sp_users':
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $cdate
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property SpEvents[] $spEvents
 * @property SpFriends[] $spFriends
 */
class SpUsers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpUsers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sp_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
				array('username,password,firstname,lastname,email,phone','required'),
				array('email','email'),
				array('username,email','unique'),
				array('status', 'numerical', 'integerOnly'=>true),
				array('username, password, firstname, lastname', 'length', 'max'=>32),
				array('email', 'length', 'max'=>128),
				array('phone', 'length', 'max'=>20),
				array('cdate', 'safe'),
				// The following rule is used by search().
				// Please remove those attributes that should not be searched.
				array('user_id, username, password, firstname, lastname, email, phone, cdate, status', 'safe', 'on'=>'search'),
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
				'spEvents' => array(self::HAS_MANY, 'SpEvents', 'user_id'),
				'spFriends' => array(self::HAS_MANY, 'SpFriends', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
				'user_id' => 'User',
				'username' => 'Username',
				'password' => 'Password',
				'firstname' => 'Firstname',
				'lastname' => 'Lastname',
				'email' => 'Email',
				'phone' => 'Phone',
				'cdate' => 'Cdate',
				'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('cdate',$this->cdate,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
		));
	}
	
	/**
	 * beforeSave
	 * @param integer $password current user password
	 * @param date $cdate change updates the date
	 */
	protected function beforeSave() {
		if (parent::beforeSave()) {
			if ($this->isNewRecord) {
				$this->cdate = new CDbExpression('NOW()');
				$this->password = md5($this->password);
			}
			return true;
		}
		return false;
	}
}
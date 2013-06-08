<?php

/**
 * This is the model class for table "sp_invitation_history".
 *
 * The followings are the available columns in table 'sp_invitation_history':
 * @property integer $id
 * @property integer $event_id
 * @property integer $group_id
 * @property string $invited_date
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property SpEvents $event
 * @property SpGroups $group
 * @property SpUsers $user
 */
class InvitationHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvitationHistory the static model class
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
		return 'sp_invitation_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('event_id, group_id, invited_date, user_id', 'required'),
			array('event_id, group_id, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, event_id, group_id, invited_date, user_id', 'safe', 'on'=>'search'),
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
			'event' => array(self::BELONGS_TO, 'SpEvents', 'event_id'),
			'group' => array(self::BELONGS_TO, 'SpGroups', 'group_id'),
			'user' => array(self::BELONGS_TO, 'SpUsers', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'event_id' => 'Event',
			'group_id' => 'Group',
			'invited_date' => 'Invited Date',
			'user_id' => 'User',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('invited_date',$this->invited_date,true);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
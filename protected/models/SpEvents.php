<?php

/**
 * This is the model class for table "sp_events".
 *
 * The followings are the available columns in table 'sp_events':
 * @property integer $event_id
 * @property integer $user_id
 * @property string $event_name
 * @property string $event_desc
 * @property string $event_shortdesc
 * @property string $event_venue
 * @property string $event_image
 * @property integer $event_status
 *
 * The followings are the available model relations:
 * @property SpUsers $user
 */
class SpEvents extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SpEvents the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sp_events';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('event_name,event_desc,event_shortdesc,event_venue', 'required'),
            array('user_id, event_status', 'numerical', 'integerOnly' => true),
            array('event_name, event_venue', 'length', 'max' => 32),
            array('event_shortdesc', 'length', 'max' => 512),
            array('event_image', 'length', 'max' => 256),
            array('event_desc', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('event_id, user_id, event_name, event_desc, event_shortdesc, event_venue, event_image, event_status', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'SpUsers', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'event_id' => 'Event',
            'user_id' => 'User',
            'event_name' => 'Event Name',
            'event_desc' => 'Event Desc',
            'event_shortdesc' => 'Event Shortdesc',
            'event_venue' => 'Event Venue',
            'event_image' => 'Event Image',
            'event_status' => 'Event Status',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('event_id', $this->event_id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('event_name', $this->event_name, true);
        $criteria->compare('event_desc', $this->event_desc, true);
        $criteria->compare('event_shortdesc', $this->event_shortdesc, true);
        $criteria->compare('event_venue', $this->event_venue, true);
        $criteria->compare('event_image', $this->event_image, true);
        $criteria->compare('event_status', $this->event_status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
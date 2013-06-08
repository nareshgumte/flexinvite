<?php

/**
 * This is the model class for table "sp_groups".
 *
 * The followings are the available columns in table 'sp_groups':
 * @property integer $group_id
 * @property integer $user_id
 * @property string $group_name
 *
 * The followings are the available model relations:
 * @property SpFriends[] $spFriends
 * @property SpUsers $user
 */
class SpGroups extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SpGroups the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sp_groups';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, group_name', 'required'),
            array('user_id', 'numerical', 'integerOnly' => true),
            array('group_name', 'length', 'max' => 64),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('group_id, user_id, group_name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'spFriends' => array(self::MANY_MANY, 'SpFriends', 'sp_group_members(group_id, group_member_id)'),
            'user' => array(self::BELONGS_TO, 'SpUsers', 'user_id'),
            'group' => array(self::BELONGS_TO, 'SpGroups', 'group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'group_id' => 'Group',
            'user_id' => 'User',
            'group_name' => 'Group Name',
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

        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('group_name', $this->group_name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function insertMembers($cbox, $group_id) {
        $connection = Yii::app()->db;
        if (!empty($cbox)) {
            foreach ($cbox as $key => $value) {

                try {
                    $parameters = array(":group_id" => $group_id, ':group_member_id' => $value);
                    $sql = "insert into sp_group_members (group_id,group_member_id) values (:group_id, :group_member_id)";
                    //echo $sql;
                    $res = $connection->createCommand($sql)->execute($parameters);
                } catch (Exception $e) {
                    //var_dump($e);
                    //return $e;
                }
            }
            return true;
        } else {
            return false;
        }
    }

}
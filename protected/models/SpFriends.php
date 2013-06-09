<?php

/**
 * This is the model class for table "sp_friends".
 *
 * The followings are the available columns in table 'sp_friends':
 * @property integer $id
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $whois
 *
 * The followings are the available model relations:
 * @property SpUsers $user
 */
class SpFriends extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SpFriends the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sp_friends';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('firstname,lastname,email,phone', 'required'),
            array('email', 'email'),
            array('user_id', 'numerical', 'integerOnly' => true),
            array('firstname, lastname', 'length', 'max' => 32),
            array('email', 'length', 'max' => 256),
            array('phone', 'length', 'max' => 20),
            array('whois', 'length', 'max' => 128),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, user_id, firstname, lastname, email, phone, whois', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'user_id' => 'User',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'email' => 'Email',
            'phone' => 'Phone',
            'whois' => 'Whois',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('firstname', $this->firstname, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('whois', $this->whois, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function insertFriends($contacts, $whois) {
        $connection = Yii::app()->db;
        if (!empty($contacts)) {
            foreach ($contacts as $key => $value) {

                $command = "SELECT email FROM `sp_friends` WHERE email='" . $key . "'";
                $dataReader = $connection->createCommand($command)->query();

                $rows = $dataReader->readAll();
                if (!$rows) {
                    $parameters = array(":user_id" => Yii::app()->user->user_id, ':firstname' => $value, ':lastname' => $value,
                        ':email' => $key, ':whois' => $whois);
                    $sql = "insert into sp_friends (user_id, firstname,lastname,email,whois) values (:user_id, :firstname,:lastname,:email,:whois)";
                    $res = $connection->createCommand($sql)->execute($parameters);
                }
            }
            return true;
        } else {
            return false;
        }
        /* $sql = 'INSERT INTO sp_friends (user_id, firstname,lastname,email,whois) VALUES ' . $values;
          $command = Yii::app()->db->createCommand($sql);
          $command->execute();
         */
    }

    public function getFriends($user_id) {
        $criteria = new CDbCriteria;
        $criteria->compare('user_id', $user_id);
        $friendsList = SpFriends::model()->findAll($criteria);
        return $friendsList;
    }

    public function getInfo($id, $value) {
        $criteria = new CDbCriteria;
        $criteria->compare('id', $id);
        $friendsInfo = SpFriends::model()->findAll($criteria);
        return $friendsInfo[0]->$value;
    }

}
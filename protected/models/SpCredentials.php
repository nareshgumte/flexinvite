<?php

/**
 * This is the model class for table "sp_credentials".
 *
 * The followings are the available columns in table 'sp_credentials':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $type
 */
class SpCredentials extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return SpCredentials the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sp_credentials';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username,password,type', 'required'),
            array('type', 'numerical', 'integerOnly' => true),
            array('username, password', 'length', 'max' => 64),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, type', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'type' => 'Type',
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
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('type', $this->type);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function validateCredentials($details) {
        $ers = array();
        $done = false;
        if ($details['type'] == 1) {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
            if (eregi($pattern, $details['username'])) {
                $inviter = new openinviter();
                $oi_services = $inviter->getPlugins();
                $provider = $inviter->getPluginByDomain($details['username']);
                if (!empty($provider)) {
                    if (isset($oi_services['email'][$provider]))
                        $plugType = 'email';
                    elseif (isset($oi_services['social'][$provider]))
                        $plugType = 'social';
                    else
                        $plugType = '';
                }
                else
                    echo "Email missing !";
            } else {
                $this->addError('username', 'Please provide valid email.');
                return false;
            }
            if (empty($details['password']))
                echo "Password missing !";
            if (count($ers) == 0) {
                $inviter->startPlugin($provider);
                $internal = $inviter->getInternalError();
                if ($internal)
                    echo $internal;
                elseif (!$inviter->login($details['username'], $details['password'])) {
                    $internal = $inviter->getInternalError();
                    $msg = $internal ? $internal : "Login failed. Please check the email and password you have provided and try again later !";
                } else {
                    $done = true;
                }
            }
        }
        if ($details['type'] == 2) {
            $username = $details['username'];
            $password = $details['password'];
            $receiver = '9985143256';
            $message = 'validating credentials of ' . $username;
            $sms = new Way2Sms();
            if (!preg_match("/^((\+){0,1}91(\s){0,1}(\-){0,1}(\s){0,1})?([0-9]{10})$/", $username)) {
                $this->addError('username', 'Provide valid mobile number.');
                return false;
            } else {
                $result = $sms->login($username, $password);
                if ($result) {
                    $smsStatus = $sms->send($receiver, $message);
                    if ($smsStatus) {
                        return true;
                    } else {
//                    echo "Unable to send message";
                    }
                    $sms->logout();
                } else {
                    $this->addError('password', 'Invalid username or password.');
                    return false;
                }
            }
        }
        if (!$done) {
            $this->addError('password', 'Incorrect username or password.');
        } else {
            return true;
        }
    }

}
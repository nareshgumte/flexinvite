<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public $_id;

    public function authenticate() {
        $record = SpUsers::model()->findByAttributes(array('username' => $this->username));
        if ($record === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        else if ($record->password !== md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->_id = $record->user_id;
            if ($record->username == 'admin') {
                $this->setState('isAdmin', true);
            } else {
                $this->setState('isAdmin', false);
            }
            $this->setState('name', $record->username);
            $this->setState('user_id', $record->user_id);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

}

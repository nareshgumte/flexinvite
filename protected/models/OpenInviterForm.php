<?php

/**
 * OpenInviter class.
 * OpenInviter is the data structure for keeping
 */
class OpenInviterForm extends CFormModel {

    public $password;
    public $email;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array('email,password', 'required'),
            array('email', 'email'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'password' => 'Password',
        );
    }

}


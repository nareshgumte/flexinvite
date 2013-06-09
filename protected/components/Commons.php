<?php

/**
 * Commons class 
 */
class Commons {

    public $base_url = "http://api.linkedin.com";
    public $secure_base_url = "https://api.linkedin.com";

    /**
     * sendCurlRequest
     * @param string $url
     * @param string $method
     * @param string $type
     * @param array $postData
     * @param array $auth
     * @return boolean
     */
    public function sendCurlRequest($url, $method = 'POST', $type = "fb", $postData = null, $auth = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        if ($type == "linked") {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/xml", "Content-length: " . strlen($postData)));
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        if (is_array($postData)) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        }
        if (is_array($auth)) {
            curl_setopt($ch, CURLOPT_USERPWD, $auth['username'] . ':' . $auth['password']);
        }
        $response = curl_exec($ch);
        if (curl_getinfo($ch, CURLINFO_HTTP_CODE) != '200') {
            $response = false;
        }
        curl_close($ch);
        return $response;
    }

    /** sendEmail
     * Funtions is used to send an email
     * @param string $to
     * @param string $subject
     * @param text $body
     * @param string $from
     * @param array $attachments
     * @param integer $priority
     * @param string $cc
     * @param string $bcc
     * @return boolean
     */
    public static function sendMail($to, $subject, $body, $from, $attachments = false, $priority = 2, $cc = null, $bcc = null) { //
        $from_name = null;
        $from_email = null;
        $to_name = null;
        $to_email = null;
        $mail = Yii::createComponent('application.extensions.mailer.EMailer');
        if ($to[0] == ':') {
            return false;
        } // this email address is disabled
        if (preg_match('/(.+)<(.+)>/i', $from, $matches)) {
            if (!empty($matches[1])) {
                $from_name = trim($matches[1]);
            }
            if (!empty($matches[2])) {
                $from_email = trim($matches[2]);
            }
        }
        if (empty($from_email)) {
            $from_email = $from;
        }
        if (preg_match('/(.+)<(.+)>/i', $to, $matches)) {
            if (!empty($matches[1])) {
                $to_name = trim($matches[1]);
            }
            if (!empty($matches[2])) {
                $to_email = trim($matches[2]);
            }
        }

        if (empty($to_email)) {
            $to_email = $to;
        }

        if (is_array($body)) {
            if (!empty($body['html'])) {
                $mail->IsHTML(true);
                $mail->Body = $body['html'];
                $htmlbody = $body['html'];
            }
            if (!empty($body['text'])) {
                $mail->AltBody = $body['text'];
                $body = $body['text'];
            }
        } else {
            $mail->Body = $body;
//$mail->MsgHTML = $body;
        }

//Add Cc
        if (!empty($cc)) {
            if (strstr($cc, ',')) {
                $t = explode(',', $cc);
                foreach ($t as $cc_email) {
                    $mail->AddCC($cc_email);
                }
            } else {
                $mail->AddCC($cc);
            }
        }

//Add Bcc
        if (!empty($bcc)) {
            if (strstr($bcc, ',')) {
                $t = explode(',', $bcc);
                foreach ($t as $bcc_email) {
                    $mail->AddCC($bcc_email);
                }
            } else {
                $mail->AddBCC($bcc);
            }
        }
# Priority?
        if ($priority == 3) {
            $pri = 1;
        } elseif ($priority == 1) {
            $pri = 5;
        } else {
            $pri = 3;
        }
// Attachments
        if ($attachments !== false) {
            foreach ($attachments as $attach) {
                $file = $attach['tmp_name']; //we're assuming attachments are coming from $_FILES
                if (is_file($file)) {
# File name of Attachment
                    echo $filename = $attach['name'];
                    $mail->AddAttachment($file, $filename);
                }
            }
        }

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com"; //Yii::app()->params['mail-host']; //"s113534.gridserver.com";
        $mail->Port = 465; //Yii::app()->params['smtp-port']; //465;
        $mail->CharSet = 'UTF-8'; //Yii::app()->params['char-set']; //'UTF-8';
        $mail->Username = self::getCredentials('username', 0); //Yii::app()->params['mail-auth-email'];
        $mail->Password = self::getCredentials('password', 0); //Yii::app()->params['mail-auth-password'];
        $mail->SMTPKeepAlive = 'true';
        $mail->SMTPDebug = false;
//if (Yii::app()->params['secure_connection']) {
        if (true) {
            $mail->SMTPSecure = 'ssl';
        } else {
            $mail->SMTPSecure = 'tls';
        }
        $mail->Hostname = $_SERVER['SERVER_NAME'];
        $mail->From = $from_email;
        $mail->FromName = str_replace('"', '', $from_name);
        $mail->Sender = $from_email;
        $mail->Subject = $subject;
        $mail->AddAddress($to_email, $to_name);
        $mail->Priority = $pri;
        if (!$mail->Send()) {
            $mail_sent = FALSE;
        } else {
            $mail_sent = TRUE;
        }
        $mail->ClearAddresses();
        $mail->SmtpClose();
        return $mail_sent;
    }

    /**
     * ImportContacts
     * @param string $email email id 
     * @param string $password password from post
     * @return boolean
     */
    public static function importContacts() {
        $inviter = new openinviter();
        $oi_services = $inviter->getPlugins();
        if (!empty($_POST['step']))
            $step = $_POST['step'];
        else
            $step = 'get_contacts';
        $ers = array();
        $oks = array();
        $import_ok = false;
        $done = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($step == 'get_contacts') {
                if (empty($_POST['ChangePassword']['email'])) {
                    echo "Email missing !";
                } else {
                    $provider = $inviter->getPluginByDomain($_POST['ChangePassword']['email']);
//if $provider is false user entered not supported domain n
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
                }
                if (empty($_POST['ChangePassword']['emailPassword']))
                    echo "Password missing !";
                if (count($ers) == 0) {

                    $inviter->startPlugin($provider);
                    $internal = $inviter->getInternalError();

                    $contacts = $inviter->getMyContacts();
                    if ($internal)
                        echo $internal;
                    elseif (!$inviter->login($_POST['ChangePassword']['email'], $_POST['ChangePassword']['emailPassword'])) {
                        $internal = $inviter->getInternalError();
                        echo ($internal ? $internal : "Login failed. Please check the email and password you have provided and try again later !");
                    } elseif (false === $contacts = $inviter->getMyContacts())
                        echo "Unable to get contacts !";
                    else {
                        $import_ok = true;
                        $step = 'send_invites';
                        $_POST['oi_session_id'] = $inviter->plugin->getSessionID();
                        $_SESSION['oi_session_id'] = $_POST['oi_session_id'];
                    }
                }
            }
        } else {
            echo "This is not post method";
        }

        if (!$done) {
            $contacts['provider'] = $provider;
            return $contacts;
        } else {
            return false;
        }
    }

    /**
     * ImportContacts
     * This function is used to import contacts Facebook
     * @see fb_api_key facebook api key
     * @see fb_api_key_secret  facebook api secret
     * @return array
     */
    public static function importFBContacts() {
        $facebook = new Facebook(array(
            'appId' => Yii::app()->params['fb_api_key'], //"327963737297629", //
            'secret' => Yii::app()->params['fb_api_key_secret'], //"f8a694c90e7df3b55c6e6a4e1734e3a8"//
        ));
        $user = $facebook->getUser();
        $list = array();
        if ($user) {
            try {
                $user_friends = $facebook->api('/me/friends');
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = NULL;
            }
        }
        if (isset($user_friends)) {
            return $user_friends;
            exit;
        }
    }

    /**
     * ParseName 
     * @param string $title
     * @return string
     */
    public static function parseName($title, $phone = false) {
        if ($phone) {
            $title = str_replace("-", "", $title);
            $title = str_replace("+", "", $title);
        } else {
            $title = str_replace("'", "", $title);
            $title = str_replace(" ", "-", $title);
            $title = str_replace(",", "-", $title);
            $title = str_replace(".", "-", $title);
            $title = str_replace("(", "", $title);
            $title = str_replace(")", "", $title);
            $title = str_replace('"', '-', $title);
            $title = str_replace('#', '', $title);
            $title = str_replace('&', '', $title);
            $title = str_replace('?', '', $title);
        }
        return $title;
    }

    /**
     * Get Credentials
     * @param string $value
     * @param string $key
     * @return string
     */
    public static function getCredentials($value, $key) {
        $criteria = new CDbCriteria();
        $criteria->compare('user_id', Yii::app()->user->user_id);
        $credentials = SpCredentials::model()->findAll($criteria);
        //echo "<pre>";var_dump($credentials[0]->username);exit;
        return $credentials[$key]->$value;
    }

    /**
     * sendSms
     * @param integer $receiver
     * @param string $message
     * @return boolean
     */
    public static function sendSms($receiver, $message) {
        $receiver = self::parseName($receiver, true);
        $username = self::getCredentials('username', 1);
        $password = self::getCredentials('password', 1);
        $sms = new Way2Sms();
        $result = $sms->login($username, $password);
        if ($result) {
            $smsStatus = $sms->send($receiver, $message);
            if ($smsStatus) {
                return true;
            } else {
                return false;
            }
            $sms->logout();
        } else {
            return false;
        }
    }

}


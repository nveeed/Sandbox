<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 5/11/2015
 * Time: 11:21 AM
 */

require_once __DIR__."/mandrill/Mandrill.php";

class Mailer extends Mandrill{
    public $apiKey;

    public function __construct(){
        $this->apiKey = "iWXEJKCA9DGqgNXxP__oJA";
        parent::__construct($this->apiKey);
    }

    public static function send( $to, $subject, $body, $from_name, $from_email='test@test.com'){
        $mailer = new Mailer();
        $message = array(
            'subject' => $subject,
            'html' => $body,
            'from_email' => $from_email,
            'from_name' => $from_name,
            'to' => array(
                array(
                    'email' => $to,
                    'name' => $to,
                    'type' => 'to'
                )
            ),
        );
        return $mailer->messages->send($message);
    }
}
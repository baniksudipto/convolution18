<?php
/**
 * Created by PhpStorm.
 * User: Subhashis
 * Date: 07-02-2017
 * Time: 11:45
 */
require_once "Mail.php";
require_once "functions.php";

function sendGMail($to,$sub,$msg)
{ 
    $from = 'Convolution 2018<juconvo18@gmail.com>';
//    $to = '<subhashis.b96@gmail.com>';
    $subject = $sub;
    $body = $msg;
    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject,
        'MIME-Version' => 1,
        'Content-type' => 'text/html;charset=iso-8859-1'
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'juconvo18@gmail.com',
        'password' => 'snapdragon'
    ));

    $mail = $smtp->send($to, $headers, $body);
//
//    if (PEAR::isError($mail)) {
//        echo('<p>' . $mail->getMessage() . '</p>');
//    } else {
//        echo('<p>Message successfully sent!</p>');
//    }

}


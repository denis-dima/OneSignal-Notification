<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: OneSignal-Notification
 * Date: 31.01.2017
 * Time: 13:23
 * All rights and copyrights are owned by Sevio Solutions®
 */

function sendMessage()
{
    $image = "http://sevio.ro/images/sevio-digital-solutions.png";
    $message = "This is a message";
    $url = "http://www.sevio.ro";

    $content = array(
        "en" => $message
    );

    $fields = array(
        'app_id' => ONE_SIGNAL_APP_ID,
        'included_segments' => array('All'),
        'data' => array("foo" => "bar"),
        'contents' => $content,
        'url' => $url,
//        'firefox_icon' => $image,
        'chrome_web_icon' => $image,
        'small_icon' => $image,
        'large_icon' => $image
    );

    $fields = json_encode($fields);

    $auth = 'Authorization: Basic ' . ONE_SIGNAL_AUTH;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
        $auth));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
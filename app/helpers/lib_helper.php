<?php

function dump($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function download_str($string, $filename, $contentType = 'application/octet-stream')
{
    header('Content-Description: File Transfer');
    header("Content-Type: $contentType");
//		header('Content-type: text/plain');
    header("Content-Disposition: attachment; filename=$filename");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma:  public');
    header('Content-Length: ' . strlen($string));

    echo $string;
}

function download_file($path, $filename)
{
    if (!file_exists($path)) {
        echo "File not exists: $filename path=?";
        return FALSE;
    }
    header('Content-Disposition: attachment; filename=' . basename($filename));
//	header('Content-Type: plain/text'); 
    header('Content-Type: application/octet-stream');
    header('Content-Transfer-Encoding: binary');
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
    header("Pragma: public");

    readfile($path);
}

function send_email($to, $subject, $message)
{
    $header = "From: " . FROM_EMAIL . "\r\n";
    $header .= "BCC: " . BCC_EMAIL . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    log_message('error', "$to , $subject, message , $header");

    $mail_success = mail($to, $subject, $message, $header);

    return $mail_success;
}

function valid_mail($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
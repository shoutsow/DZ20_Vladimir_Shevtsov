<?php

$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

function form_check($phone, $email, $message) {

    $phone = strip_tags(htmlspecialchars(trim($phone)));
    $email = strip_tags(htmlspecialchars(trim($email)));
    $message = strip_tags(htmlspecialchars(trim($message)));
    
    if (empty($phone) || empty($email) || empty($email) || strlen($message) < 5 || strlen($message) > 250) return false;

    if (!preg_match('/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,12}(\s*)?$/', $phone) || 
    !preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $email)) return false;

    return true;
}

if (form_check($phone, $email, $message)) {
    header('Location: ./header.php?pid=thanks');
} else {
    header('Location: ./header.php?pid=contact');
}

?>
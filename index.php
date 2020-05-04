<?php

$login = 'admin';
$password = '12345';

if(isset( $_POST['login']) && isset($_POST['password']) ) {
    $mylogin = $_POST['login'];
    $mypassword = $_POST['password'];

    if($login == $mylogin && $password == $mypassword) {
        include "./panel.php";
        exit();
    }
};

include "./form.php";
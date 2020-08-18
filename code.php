<?php
ob_start();
date_default_timezone_set('Asia/Baku');

require_once 'db.php';

$db = new DBConnection;

require_once 'class.php';

$CRUD = new CRUD;

$isciler = $CRUD->Select("users", 1);

if (isset($_POST["send"])) {
    $col = "
    user_name=:fullname,
    user_gender=:gender,
    user_birth=:bday,
    user_mail=:mail,
    user_city=:city,
    user_country=:country
    ";

    $arr = [
        'fullname' => $_POST['name'],
        'gender' => $_POST['gender'],
        'bday' => $_POST['birth'],
        'mail' => $_POST['email'],
        'city' => $_POST['city'],
        'country' => $_POST['country']
    ];
    $CRUD->Insert("users", $col, $arr) ? header("Location:index.php?status=ok") : header("Location:index.php?status=no");
    
}


if (isset($_POST["cancel"])){
    header("Location:index.php");
}
<?php

include_once('../database/database.php');
include_once('../helpers/helper_functions.php');
session_start();
// check if POST is used
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location'.url('forum/src/index.php'));
    exit(0);
}

//get form data
$username=$_POST['username'];
$password=sha1($_POST['password']);

// db connect fail->login form
if(!dbConnect()){
    header('location'.url('forum/src/login.php'));
    exit(0);
}


// run sql querry
$sql="SELECT * FROM users WHERE username= :username AND password = :password";
dbQuery($sql,[ ':username' =>$username,':password' => $password]);
// get data
$user = dbGetRow();
//SUCCES>a) share logged in users properties



if(!empty($user)){
    $_SESSION['user_id']= $user['id'];
    $_SESSION['username']= $user['username'];
    echo 'test4';

    header('location'. url('index.php'));
    exit(0);
}

//fail> login form
else{
    header('location'. url('login.php'));
    echo 'test1';
      exit(0);
}

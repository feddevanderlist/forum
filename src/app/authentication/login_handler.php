<?php
session_start();
include('../database/database.php');
include('../helpers/helper_functions.php');

// check if POST is used
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: ' . url('forum/src/index.php'));
    exit(0);
}

//get form data
$username=$_POST['username'];
$password=sha1($_POST['password']);

// db connect fail->login form
if(!dbConnect()){
    header('Location: ' . url('forum/src/app/authentication/login.php'));
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


    header('Location: ' . url('forum/src/index.php'));
    exit(0);
}

//fail> login form
else{
    header('Location: ' . url('forum/src/app/authentication/login.php'));


}

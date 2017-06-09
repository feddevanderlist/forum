<?php
include('helper_functions.php');
include('../database/database.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$birthdate=$_POST['birthdate'];
$email=$_POST['email'];
$passw=sha1($_POST['passw']);
$passw2=sha1($_POST['passw2']);
global $db;
if($passw==$passw2){}

else{
        echo "<br>password not the same";
        die;
    }

dbConnect();


$sql="INSERT INTO users (username, password,email,first_name,last_name,date_of_birth)
VALUES (?,?,?,?,?,?)";
$params=[$username,$passw,$email,$firstname,$lastname,$birthdate];
deQuery($sql,$params);

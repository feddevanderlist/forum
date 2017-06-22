<?php
include('../helpers/helper_functions.php');
include('../database/database.php');

// Check if script is starterd by our form
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: '. url('forum/src/authentication/register.php'));
    exit(0);
}


// get data out of form
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$birthdate=$_POST['birthdate'];
$email=$_POST['email'];
$passw=sha1($_POST['passw']);
$passw2=sha1($_POST['passw2']);



//database connection

if(!dbConnect()){
    //de connectie is niet gelukt;
    //dus doorlinken naar de homepage
    header('Location: '. url('forum/src/app/authentication/register.php'));
    exit(0);
}
$sql="SELECT * FROM users WHERE username = :username";
dbQuery($sql, [':username'=> $username]);
if(dbCount()>0){
    header('Location: '. url('forum/src/app/authentication/register.php'));
    echo '<script> alert("username bestaat al")</script>';
    exit(0);
}


if($passw==$passw2){
    //save data to db
$sql="INSERT INTO users(username, password, email, first_name, last_name, date_of_birth)
        VALUES (:username, :password, :email, :firstname, :lastname, :dateofbirth)";
    dbQuery($sql ,
        [
            ':username' => $username,
            ':email' => $email,
            ':password' => $passw,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':dateofbirth' => $birthdate
        ]);

    header('Location: '. url('forum/src'));
    exit(0);
}

else{
    echo "<br>password not the same";
    die;
}
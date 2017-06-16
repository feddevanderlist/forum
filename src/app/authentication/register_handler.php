<?php
include('../helpers/helper_functions.php');
include('../database/database.php');
dbConnect();

// Check if script is starterd by our form
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location'.url(''));
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
    header('location'.url(''));
    echo 2;
    exit(0);
}

if($passw==$passw2){
    //save data to db
$sql="INSERT INTO users(username, password, email, first_name, last_name, date_of_birth))
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
    echo 'registered';
    header('location'.url(''));
    exit(0);
}

else{
    echo "<br>password not the same";
    die;
}
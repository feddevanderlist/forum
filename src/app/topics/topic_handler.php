<?php

session_start();
include('../helpers/helper_functions.php');
include('../database/database.php');

// Check if script is starterd by our form
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: '. url('forum/src/authentication/register.php'));
    exit(0);
}
else{
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $userid = $_SESSION['user_id'];
    $themeid = $_POST['theme_id'];

    $sql= "INSERT INTO topics(subject, description, user_id , theme_id)  VALUES (:subject, :description, :userid, :themeid)";
    dbQuery($sql, [':subject' => $subject,
        ':description' => $description,
        ':userid' => $userid,
        ':themeid' => $themeid]);

    header('Location ' . url('forum/src'));}
<?php

session_start();
include('../helpers/helper_functions.php');
include('../database/database.php');

// Check if script is starterd by our form
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: '. url('forum/src/authentication/register.php'));
    exit(0);
}
if(!dbConnect()){
    header('Location: ' . url('forum/src'));
    exit(0);
}



$topicid = $_POST['topic_id'];
$description = $_POST['comment'];
$userid = $_SESSION['user_id'];

$sql= "INSERT INTO replies(topic_id, content, user_id)  VALUES (:id, :content, :userid)";
dbQuery($sql, [':id' => $topicid,
    ':content' => $description,
    ':userid' => $userid ]);

header('Location: ' . url("forum/src/app/topics/comment.php?id=$topicid"));

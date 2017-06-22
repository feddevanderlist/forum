<?php
session_start();
include_once ('../helpers/helper_functions.php');
include_once('../template/head.php');//voeg de header to
include_once('../template/navbar.php');
include('../database/database.php');

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    header('Location: ' . url('forum/src'));
    exit(0);
}
$topic_id = $_GET['id'];
$topic_subject = '';

//check if subject exists
if(!dbConnect()) {
    header('Location: ' . url('forum/src'));
    exit(0);
}

if(!isset($_GET['subject'])) {
    // Via de database de titel van dit topic binnenhalen
    if(dbQuery('SELECT * FROM topics WHERE id = :id', [ ':id' => $topic_id])) {
        $topic = dbGetRow();
        $topic_subject = $topic['subject'];
    } else {
        header('Location: ' . url(''));
        exit(0);
    }
} else {
    $topic_subject = $_GET['subject'];
}

$sql = "SELECT topics.id as id, 
               topics.subject as subject, 
               topics.description as infotopic, 
               topics.created_at as created_at,
               users.username as username, 
               replies.id as replies_id,
               replies.content as content,
               replies.created_at as reply_created,
               replies.id as reply_id
        FROM topics
        INNER JOIN users ON users.id = topics.user_id
        INNER JOIN replies ON replies.topic_id = topics.id
        WHERE replies.user_id = :id";
dbQuery($sql, [ ':id' => $topic_id]);
$replies = dbGetRows();

?>

    <section id="ondernavbar">

    </section>
    <section id="topicsubject">
        <span class="topic"><h1><?= $topic_subject ?> </h1></span>
        <section class="topicinfo"><?= $replies['infotopic']?></section>
    </section>

<div class="comment_container">
<?php foreach ($replies as $reply):?>

            <section id="comment">
            <section class="description"><?=$reply['content'];?></section>
            <section class="created">created at: <?=$reply['reply_created'];?></section>
            <section class="user_id">Created by:<?= $reply['username']?> </section>
            </section>
<?php endforeach ?>
</div>
<?php if(checklogin()):?>
    <form name="newtopi" action="topic_handler.php" method='POST'>
        Subject:<input type="text" name="subject" required="required" placeholder="Subject"><br>
        Description:<input type="text" name="description" required="required" placeholder="Description">
        <input type="hidden" name="theme_id" value="<?=$topic_id?>"> </input>
        <button type="submit" name="submit" value="send">Create Topic</button>
    </form>
<?php endif; ?>


<?php include_once('../template/foot.php'); //voegt footer toe
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
$theme_id = $_GET['id'];
$theme_subject = '';

//check if subject exists
if(!dbConnect()) {
    header('Location: ' . url('forum/src'));
    exit(0);
}

if(!isset($_GET['subject'])) {
    // Via de database de titel van dit thema binnenhalen
    if(dbQuery('SELECT * FROM themes WHERE id = :id', [ ':id' => $theme_id])) {
        $theme = dbGetRow();
        $theme_subject = $theme['subject'];
    } else {
        header('Location: ' . url(''));
        exit(0);
    }
} else {
    $theme_subject = $_GET['subject'];
}

$sql = "SELECT topics.id as id, 
               topics.subject as subject, 
               topics.description as description, 
               topics.created_at as created_at,
               users.username as username 
        FROM topics
        INNER JOIN users ON users.id = topics.user_id
        WHERE topics.theme_id = :id";
dbQuery($sql, [ ':id' => $theme_id]);
$topics = dbGetRows();

if(isset($_SESSION['user_id'])){
$sql="SELECT role from users WHERE id= :id";
dbQuery($sql, [':id' => $_SESSION['user_id']]);
$admin = dbGetRow();}
?>

    <section id="ondernavbar">

    </section>
    <section id="themesubject">
        <span class="topic"><h1><?= $theme_subject ?> - Topics</h1></span>
    </section>
<?php foreach ($topics as $topic):?>
    <a href="./topic.php?id=<?=$topic['id']?>&subject=<?=$topic['subject']?>"><section class="thread">
            <section class="subject"><?=$topic['subject']?>
            </section>
            <section class="description"><?=$topic['description'];?></section>
            <section class="created">created at: <?=$topic['created_at'];?></section>
            <section class="user_id">Created by:<?= $topic['username']?> </section>
            aantal replys:<?=dbcount()?>
        </section></a>
<?php endforeach ?>
<?php if(checklogin() && $admin['role'] == 1):?>
    <form name="newtopi" action="topic_handler.php" method='POST'>
        Subject:<input type="text" name="subject" required="required" placeholder="Subject"><br>
        Description:<input type="text" name="description" required="required" placeholder="Description">
        <input type="hidden" name="theme_id" value="<?=$theme_id?>"></input>
        <button type="submit" name="submit" value="send">Create Topic</button>
    </form>
<?php endif; ?>



<?php include_once('../template/foot.php'); //voegt footer toe
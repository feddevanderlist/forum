<?php
session_start();

include_once ('app/helpers/helper_functions.php');
include_once('app/template/head.php');//voeg de header to
include_once('app/template/navbar.php');
include('app/database/database.php');

$themes = [];
if(dbConnect()) {
    if(dbQuery("SELECT * FROM themes")) {
        // Alles gevonden
        $themes = dbGetRows();
    }}
if(isset($_SESSION['user_id'])){
$sql="SELECT role from users WHERE id= :id";
dbQuery($sql, [':id' => $_SESSION['user_id']]);
$admin = dbGetRow();}
?>

    <section id="ondernavbar">

    </section>
    <section id="welkom">
    Welkom op het vandalisten forum op dit forum mag alles kappot en kan alles KAPOT
    </section>
    <?php foreach ($themes as $theme):?>
    <a href="app/topics/topics.php?id=<?=$theme['id']?>&subject=<?=$theme['subject']?>"><section class="thread">
    <section class="subject"><?=$theme['subject']?>
    </section>
    <section class="description"><?=$theme['description'];?></section>
    <section class="created">created at: <?=$theme['created_at'];?></section>
    <section class="user_id">Created by:<?php $user= dbGetUserbyId($theme['user_id']); echo $user['username'];?></section>
    </section></a>
     <?php endforeach ?>

    <?php if(checklogin() && $admin['role'] == 1):?>
    <form name="newtheme" action="app/topics/theme_handler.php" method='POST'>
        Subject:<input type="text" name="subject" required="required" placeholder="Subject"><br>
        Description:<input type="text" name="description" required="required" placeholder="Description">
        <button type="submit" name="submit" value="send">make theme</button>
    </form>
    <?php endif; ?>

<?php include_once('app/template/foot.php'); //voegt footer toe


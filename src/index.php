<?php

include_once('app/template/head.php');//voeg de header to
include_once('app/template/navbar.php');
include('app/database/database.php');

$table='themes';
dbGetRows($table)
?>

    <section id="ondernavbar">

    </section>
    <section id="welkom">
    Welkom op het vandalisten forum op dit forum mag alles kappot en kan alles KAPOT
    </section>
    <?php foreach ($data as $row) {
    echo '<section class="thread">';
    echo '<section class="subject">';
    echo $row['subject'];
    echo '</section>';
    echo '<section class="description">'.$row['description'].'</section>';
    echo '<section class="created">created at: '.$row['created_at'].'</section>';
   echo '</section>';
}?>


<?php include_once('app/template/foot.php'); //voegt footer toe
<?php

include_once('app/template/head.php');//voeg de header to
include_once('app/template/navbar.php');

?>

    <section id="register">
        <div class="information_form">
            <form name="registration" action="app/helpers/newuser.php" method='POST'>
                First name:<input type="text" name="firstname" required="required" placeholder="First name"><br>
                Last name:<input type="text" name="lastname" required="required" placeholder="Last name" ><br>
                Username:<input type="text" name="username" required="required" placeholder="username"><br>
                Date of birth<input type="date" name="birthdate" required="required" placeholder="yyyy-mm-dd"><br>
                Email address:<input type="email" name="email" required="required" placeholder="janedoe@example.com" ><br>
                Password:<input type="password" name="passw" required="required" id="passw"><br>
                Repeat Password:<input type="password" name="passw2" required="required"><br>
                <input type="submit" name="submit" value="send">
            </form>

        </div>
    </section>




<?php include_once('app/template/foot.php'); //voegt footer toe
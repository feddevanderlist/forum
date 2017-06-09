<?php
include('app/helpers/login.php');
include_once('app/template/head.php');
include_once('app/template/navbar.php');?> //voeg de header to

    <section id="register">
        <div class="information_form">
            <form name="login" action="app/helpers/login.php" method='POST'>

                Username:<input type="text" name="username" required="required" placeholder="username"><br>
                Password:<input type="password" name="passw" required="required" id="passw" placeholder="password"><br>

                <input type="submit" name="submit" value="send">
            </form>

        </div>
    </section>


<?php @include_once('app/template/foot.php'); //voegt footer toe
<?php

@include_once('app/template/head.php');?> //voeg de header to
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img scr="#">test</a>

            </div>
            <div>

                <button type="button" class="btn btn-info navbar-button navbar-right">Sign in </button>
                <button type="button" class="btn btn-info navbar-button navbar-right">register </button>
                <button type="button" class="btn btn-info navbar-button navbar-right">home  </button>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <section id="register">
        <div class="information_form">
            <form name="registration" action="app/helpers/newuser.php" method='POST'>
                First name:<input type="text" name="first_name" required="required" placeholder="First name"><br>
                Last name:<input type="text" name="last_name" required="required" placeholder="Last name" ><br>
                Username:<input type="text" name="username" required="required" placeholder="username"><br>
                Date of birth<input type="date" name="birthdate" required="required" placeholder="yyyy-mm-dd"><br>
                Email address:<input type="email" name="email" required="required" placeholder="janedoe@example.com" ><br>
                Password:<input type="password" name="passw" required="required" id="passw"><br>
                Repeat Password:<input type="password" name="passw2" required="required"><br>
                <input type="submit" name="submit" value="send">
            </form>

        </div>
    </section>




<?php @include_once('app/template/foot.php'); //voegt footer toe
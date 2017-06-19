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
            <a class="navbar-brand" href="<?=url('forum/src/index.php')?>">vandalist</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
             <?php if(isset($_SESSION['user_id'])&& isset($_SESSION['username'])):        ?>
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="<?= url('forum/src/app/user/profile.php')?>"><?=$_SESSION['username']?> </a></li>
                <li><a href="<?= url('forum/src/app/authentication/logout.php')?>">logout</a></li>
                <li class="active"><a href="<?=url('forum/src/index.php')?>">home<span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

            <?php else: ?>
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="<?= url('forum/src/app/authentication/register.php')?>">register </a></li>
                <li><a href="<?= url('forum/src/app/authentication/login.php')?>">login</a></li>
                <li class="active"><a href="<?=url('forum/src/index.php')?>">home<span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php endif; ?>
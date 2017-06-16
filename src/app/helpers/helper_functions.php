<?php

// deze pagina gebruiken om alle linkjes te laten functioneren
function asset($asset_src)
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $asset_src ;
    }

function url($url)
{
    return 'http://' . $_SERVER['HTTP_HOST']. '/'. $url ;
}
function checklogin()
{
    if(!isset($_SESSION['user_id'])) {
        header('Location: ' . url('app/authentication/login_form.php'));
        exit(0);
    }
}
?>
<?php

// deze pagina gebruiken om alle linkjes te laten functioneren
function asset($asset_src)
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/' . $asset_src ;
    }

function url($url)
{
    return 'http://' . $_SERVER['HTTP_HOST']. '/'. $url ; //always use 'location: '
}
function checklogin()
{
    if(isset($_SESSION['user_id'])) {
        return true;
    }
    return false;
}


function DEBUG($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}
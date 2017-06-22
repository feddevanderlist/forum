<?php
session_start();
include_once('../helpers/helper_functions.php');
if(isset($_SESSION['user_id']))unset($_SESSION['user_id']);

if(isset($_SESSION['username']))unset($_SESSION['username']);

session_destroy();

header('Location: ' . url('forum/src'));
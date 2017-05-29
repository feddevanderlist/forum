<?php

$db = null;
$db_statemetn = null;

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "forum";

function dbConnect()
    {
        global $db;

        try {
            $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch (PDOException $error){
        echo $error->getMessage();
};

function deQuery($sql, $params = [])
    {
    global $db, $db_statement;
    if ($db==null)
        return false;
    try{
        $db_statement= $db->prepare($sql);
        $db_statement->excute($params);
        }
        catch(PDOException)
}


function dbGetRows()
{
    global $db_statement}
    }


function dbGetRow(){}



function dbGetUserbyId(){}




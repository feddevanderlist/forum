<?php

$db = null;
$db_statement = null;

function dbConnect()
    {
        global $db;
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "forum";


        try {
            $db = new PDO('mysql:host=127.0.0.1;dbname=forum', $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $error){
        $db = null;
        return false;
}
return true;
    }


function dbQuery($sql, $params = [])
{
    global $db, $db_statement;

    if($db == null)
        return false;

    try {
        $db_statement = $db->prepare($sql);
        $db_statement->execute($params);
    } catch(PDOException $error) {
        return false;
    }

    return true;
}


function dbGetRows()
{
    global $db_statement;

    if ($db_statement)
        return $db_statement->fetchAll();

    return null;
}

function dbGetRow()
{
    global $db_statement;

    if($db_statement)
        return $db_statement->fetch();

    return null;
}

function dbCount()
{
    global $db_statement;

    if($db_statement)
        return $db_statement->rowCount();

    return 0;
}

function dbGetUserById($user_id)
{
    if(dbQuery("SELECT * FROM users WHERE id = :id", [':id' => $user_id]))
        return dbGetRow();

    return null;
}

function dbGetThemeById($theme_id)
{
    if(dbQuery("SELECT * FROM themes WHERE id = :id", [':id' => $theme_id]))
        return dbGetRow();

    return null;
}

function getTopicById($topic_id)
{
    if(dbQuery("SELECT * FROM topics WHERE id = :id", [':id' => $topic_id]))
        return dbGetRow();

    return null;
}
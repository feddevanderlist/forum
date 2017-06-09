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
            $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch (PDOException $error){
        echo $error->getMessage();

}};

function deQuery($sql, $params=null)
    {
    global $db, $db_statement;
    if ($db==null)
        return false;
    try{
        $db_statement= $db->prepare($sql);
        $db_statement->execute($params);
        }
        catch(PDOException $error){
        echo $error->getMessage();
        };
};


function dbGetRows($table)
{   //global $db;

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "forum";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

    $sql = "SELECT * FROM $table";
    $querry = $conn->prepare($sql);
    $querry->execute();
    global $data;
    $data = null;
    $data = $querry->fetchAll(PDO::FETCH_ASSOC);

};




//function dbGetRow(){};



//function dbGetUserbyId(){};




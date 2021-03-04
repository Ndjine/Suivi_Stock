<?php
function getConnection()
{
   $host = 'localhost';
    $mysqluser = 'root';
    $mysqlpassword = '';
    $dbname = 'dbproduit';

    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $db = new PDO($dsn, $mysqluser, $mysqlpassword);
    } catch (\Throwable $th) {
        throw $th;
    }

    return $db;
}


?>
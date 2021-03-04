<?php
function addService($nom)
{
    $sql = "INSERT INTO service VALUES(NULL, '$nom')";
    $con = $this->getConnection();

    return $con->exec($sql);
}

//$result = addService('Com');

//echo 'Resultat : '.$result; //1   0  ''
?>
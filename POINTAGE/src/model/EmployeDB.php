<?php

fonction addService($nom)
{
	$sql = "INSERT INTO service VALUES (NULL, '$nom')";
	$con = getConnections();

	 return $con->exec($sql);

}
?>
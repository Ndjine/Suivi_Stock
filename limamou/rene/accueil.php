<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body style="background-image: url(christmas-22.gif); ">
	<h1 style="color: lightblue" >Bienvenue <?=$_SESSION['prenom'] ?> <?=$_SESSION['nom'] ?> </h1>
	<button class="btn btn-danger"><a href="index.php?deconnecter">Se deconnecter</a></button>
</body>
</html>
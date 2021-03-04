<?php 
session_start();
require_once'../models/utilisateur.php';
//lors qu'on clique sur le button connection de la page index
	if(isset($_POST['btnconnecter'])){
		extract($_POST);
		$userTrouve=rechercheUser($login,$mdp);
		if ($userTrouve != false) {
			$_SESSION['nom'] =$userTrouve['nom'];
			$_SESSION['prenom'] =$userTrouve['prenom'];
			$_SESSION['profil'] =$userTrouve['profil'];

      header ('location:/limamou/projet1/pages/acceuil.php');
	
		}else
		{
			header("location:/limamou/projet1/index.php?erreur");
		}
	}
	//lors qu'on clique sur le button deconnection de la page index
	if(isset($_GET['btnDecon']))
	{
		$_SESSION=[];//vider la session
		session_unset();//detruit la session
		header("location:/limamou/projet1");
	}
 ?>


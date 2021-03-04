<?php
	if(isset($_GET['envoyer'])){
		$user = $_GET['user'];
		$mdp = $_GET['mdp'];
		if($user == 'admin' && $mdp == 'admin'){ 
			session_start();
			$_SESSION['nom'] = 'Mbengue';
			$_SESSION['prenom'] = 'Seydina Limamou Laye';
			header('Location: public/accueil.php');
		}else{
			echo "Mot de passe ou Login invalide";
		}
		if(isset($_GET['deconnecter'])){
			echo "ok";
			session_destroy();
			header('Location: index.php');

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body style="background-image: url(source.gif);">
	<div align="center" class="container-fluid">
		<div style="width: 400px; padding: 15px 30px; border-radius: 10px; margin-top: 50px; border: 3px solid black;background: lightblue">
				<img align="center" src="avatar.png" class="rounded-circle" width="120px">
			<form  action="" method="GET">
			  <div class="form-group">
			    <label for="nomUtilisateur">Nom d'Utilisateur</label>
			    <input type="text" class="form-control" id="nomUtilisateur" name="user" placeholder="Entrez votre nom">
			  </div>
			  <div class="form-group">
			    <label for="mdp">Mot de passe</label>
			    <input type="password" class="form-control" id="mdp"name="mdp" placeholder="Entrez votre Mot de passe">
			  </div>
			  <button type="submit" class="btn btn-primary" name="envoyer" style="margin-left: 100px;">Se connecter</button>
			</form>
		</div>
	
	</div>
</body>
</html>
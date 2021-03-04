<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="/supermarche/assets/css/style1.css">
		<meta charset="utf-8">
	</head>
	<body class="body">
		<div class="bloc_centre">
			<table class="tab1">
				<tr>
					<td style="width: 50%"><div style="width: 100%; text-align: center;"><img src="img/logo.png" class="imgLogo"></div></td>
					<td>
						<div class="titre"><u>Connexion</u></div>
			<form method="post" action="/supermarche/view/accueil.php" style="text-align: center;">
				<input type="text" name="login" placeholder="Login" class="colon" required/><br>
				<input type="password" name="mdp" placeholder="Mot de passe" class="colon" required/><br>
				<a href="#"><input type="submit" name="validerC" value="LOGIN" class="btn" style="box-shadow: 4px 4px 0px silver;"></a>
			</form>
					</td>
				</tr>
			</table>
		</div>
		<footer>
			vichSHOP © 
			<?php
				echo date('Y');
			?>
			  copyriht
		</footer>
	</body>
</html>
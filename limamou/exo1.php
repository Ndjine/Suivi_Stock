<!DOCTYPE html>
<html>
<head>
	<title>exo1</title>
	<style >
		fieldset{
			width: 50%;
			height: 90%;
			margin-left: 40%;
			margin-top: 2%;
			background-color: yellow;
		}
	</style>
</head>
<body>
<fieldset >
	<form action="exo1.php" method="post">
		<label>NOMBRE1</label>
		<input type="number" name="nombre1"><br>

		
		<label>NOMBRE2</label>
		<input type="number" name="nombre1"><br><br>
		<label>OPERATEUR</label>
		<select>
<option>*</option>
<option>/</option>
<option>+</option>
<option>-</option>
     </select><br><br>
		<input type="submit" name="" value="calcul"><br>
		<label>resultat</label>
		<input type="number" name="somme">

	</form>
</fieldset>
<?php 

echo $_post['nombre1'];





 ?>
</body>
</html>

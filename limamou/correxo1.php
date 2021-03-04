<!DOCTYPE html>
<html>
<head>
	<title>exo1</title>
	<style >
		fieldset{
			width: 50%;
			height: 90%;
		align-content: center;
			margin-top: 2%;

			background-color: yellow;
		}
	</style>
</head>
<body>
<fieldset >
	<form method="POST" action="">
		<label>NOMBRE1</label>
		<input type="number" name="nombre1"><br>
		<label>NOMBRE2</label>
		<input type="number" name="nombre1"><br><br>
		<label>OPERATEUR</label>
		<select name="choix">
<option value="*">Multiplicaion</option>
<option value="/">Division</option>
<option value="+">Addition</option>
<option value="-">Soustraction</option>
     </select><br><br>
		<input type="submit" name="calcul" ><br>
		

	</form>
</fieldset>
<?php 
	if(isset($_POST['calcul']))
	{
		$nombre1=$_POST['nombre1'];
		$nombre2=$_POST['nombre2'];
		$choice=$_POST['choix'];

		switch ($choice) {
		case '*':
			$res=$nombre1*$nombre2;
			break;
		case '+':
			$res=$nombre1+$nombre2;
			break;
		case '-':
			$res=$nombre1-$nombre2;
			break;
			case '/':
			$res=$nombre1/$nombre2;
			break;
		
		default:
			# code...
			break;
	}

	echo "$nombre1 $choice $nombre2";

	}

	
	var_dump($_POST);

 ?>
</body>
</html>

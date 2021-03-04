<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="">
		<label>Numero 1</label>
		<input type="number" name="num1">
		<br>
		<label>Numero 2</label>
		<input type="number" name="num2">
		<br>
		<select name="choix">
			<option value="+">Addition</option>
			<option value="-">Soustraction</option>
			<option value="*">Multiplication</option>
			<option value="/">Division</option>
		</select>
		<br>
		<input type="submit" name="calcul">

	</form>
	<?php
		if (isset($_POST['calcul'])) {
			$number1 = $_POST['num1'];
			$number2 = $_POST['num2'];
			$choice  = $_POST['choix'];	
		
		switch ($choice) {
			case '+':
				$res = $number1 + $number2; 
				break;
			case '-':
				 $res = $number1 - $number2;
				 break;
			case '*':
					$res = $number1 * $number2;
				 break;
			case '/':
					$res = $number1 / $number2;
				 break;

			default:
				# code...
				break;
		}
		echo "$number1 $choice $number2 = $res";
		}
	?>
</body>
</html>
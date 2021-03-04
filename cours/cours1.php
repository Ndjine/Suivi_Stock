<!DOCTYPE html>
<html>
<head>
	<title>Les bases du PHP</title>
</head>
<body>
	<ul>
		<li>Affichage</li>
		<li>Variables</li>
		<li>Calculs</li>
		<li>Concaténation</li>
		<li>If / Else</li>
	</ul>
	<hr>
</body>
</html>
<?php 
 echo "Les bases : affichage avec \"\" <br> ";

 echo 'Les bases : affichage avec \'\' <br>';

 echo "les bases avec '' <br>";
 echo 'les bases avec "" <hr> ';
 echo "Les variables <br>";
 $x = 5;
 echo $x; 
 echo "<br> x = $x";
 echo '<br> x = $x';
 echo '<br> x = '.$x;
 echo "<br> x = ".$x;
 echo "<hr>";
 echo "Les Types avec la fonction gettype() <br>";
echo "x = $x, type de x : ".gettype($x)."<br>";
$x = "Martin";
echo "x = $x, type de x : ".gettype($x)."<br>";
$x = false;
echo "x = $x, type de x : ".gettype($x)."<br>";
$x = 'A';
echo "x = $x, type de x : ".gettype($x)."<br>";
$x = 10.5;
echo "x = $x, type de x : ".gettype($x)."<br>";
echo "<hr> Les Calculs / Operateurs <br>";
$y = 15;
$res = $x + $y;
echo 'La somme : '.$res.'<br>';
echo "$x + $y = $res <br>";
#commentaire
//Comment
echo $x.' + '.$y.' = '.$res.'<br>';
echo "<hr> If / Else <br>";
if ($x > $y) {
	echo "x est plus grand !";
} elseif ($x < $y) {
	echo "x est plus petit";
}else{
	echo "Egalité";
}

$op = '/';
 $y = 0;
switch ($op) {
	case '+':
	$resu = $x + $y;
		break;
	case '-':
	$resu = $x - $y;
		break;
	case '*':
	$resu = $x * $y;
		break;
	case '/':
		if ($y == 0) {
			$resu = "Impossible de diviser par 0";
		}else{
			$resu = $x / $y;
		}
		break;
	
	default:
	$resu = "Opérateur non pris en compte";
		break;
}

echo "<br> Resultat : $resu";

 ?>
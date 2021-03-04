<h1>Tableaux</h1>
<?php 
//tableau entier
$entier=[12,15,16,17,19]
echo "Afficher le tableau avec la boucle for <br>";
for ($i=0; $i <sizeof($entier) ; $i++) { 
	echo $entier[$i].' | ';

	echo "Afficher le tableau avec la boucle foreach <br>";

	foreach ($entier as $c => $val) {
		echo $val.' - ';
	}

}
echo "<br>Affichage du tableau dans un HTML";


 ?>
 <table border="2" width="25%">
 	<tr>
 		<td>
 			
 		</td>
 	</tr>
 	
 </table>
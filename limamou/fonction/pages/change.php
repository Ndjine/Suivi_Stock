<h1>CHANGE</h1>

<form method="post">
	<pre>
		Montant : <input type="number" name="Montant"min="0" require><br>

		<select name="choix">
			<option>--Faite votre choix--</option>
			<option value="euro">Euro-Cfa</option>
			<option value="dollar">Dollar-Cfa</option>
		</select>

		<input type="submit" name="convertir" name="btn">
	</pre>

</form>

<?php 
require_once'mesfonction/mafonction.php';
if (isset($_POST['btn'])) {
	extract($_POST);
	if ($choix=='euro') {
		$resultat=conversionEuroCfa($Montant);
		echo "$Montant € = $resultat Fcfa";
	}
	else{
		conversionDollarCfa($Montant);
	}
}

 ?>
<?php 
function getdateA(){

	$date = date(format'd-m-y h :i :s');
	return $date;
}

function conversionEuroCfa($montant)
{
return $montant*650;

}

function conversionDollarCfa($montant)
{
$m = $montant*480;
echo $montant.'$ = '.$m.'Fcfa';

}

 ?>



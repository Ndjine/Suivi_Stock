<ul>
	<li>Les tableaux numérotés</li>
	<li>Les tableaux associatifs</li>
	<li>Les double tableaux </li>
	<li>les variables super-globales</li>
</ul>


<?php 
echo "<h1>tableaux numérotés</h1>";

	$note[0]=12;
	$notes=[14,15,16.5,18.5];
	$note[]=20;
	echo "Afficher avec print_r()<br>";
	print_r($notes);
	//ou
	echo "<br>";
	echo "Avec var_dump()<br>";
	var_dump($notes);
	echo "<hr>";
	echo "<h1>tableaux associatifs</h1>";
	echo "<br>";
	//$notes=array('0'=>14,'1'=>15,'2'=>16.5,'3'=>,'4'=>18.5);



 	echo "<hr>";
	echo "<Les double tableaux </h1>";
	$etudiant= array(
		'nom' =>'Mbengue' , 
		'prenom' =>'limamou' ,
		'classe' =>'L2GL' ,
		'note' =>[15,16,17,20] );
	print_r($etudiant);
	echo "<br>";
	$etudiant= array([
		'nom' =>'Mbengue' , 
		'prenom' =>'limamou' ,
		'classe' =>'L2GL' ,
		'note' =>[15,16,17,20],
		[
		'nom' =>'Mbengue' , 
		'prenom' =>'limamou' ,
		'classe' =>'L2GL' ,
		'note' =>[15,16,17,20],
		[
		'nom' =>'Mbengue' , 
		'prenom' =>'limamou' ,
		'classe' =>'L2GL' ,
		'note' =>[15,16,17,20],
		[
		'nom' =>'Mbengue' , 
		'prenom' =>'limamou' ,
		'classe' =>'L2GL' ,
		'note' =>[15,16,17,20] );
	print_r($etudiant);
	echo "<hr>";
	echo "<h1>les variables super-globales</h1>";
	var_dump($server)

	

 ?>





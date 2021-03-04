<?php 
	require_once 'bdd.php';

	function addContact($nom,$prenom,$tel,$idUser){
		//On définit la la requete
		$sql = "INSERT INTO contact(nomContact,prenomContact,telContact,idUserF) VALUES ('$nom','$prenom','$tel',$idUser)";
		global $base;

		return $base->exec($sql); // On utilise la fonction exec parsk on a une requête INSERT et cette requête renoie 1 ou 0 
	}

	function getContactsByIdUser($id){
		$sql = "SELECT * FROM contact WHERE idUserF=$id";

		global $base;

		return $base->query($sql)->fetchAll(); //fetchAll car la requete renvoie plusieurs resultats
	}

	function delContact($id){
		$req = "DELETE FROM contact WHERE idContact = $id";
		global $base;

		return $base->exec($req); // On utilise la fonction exec parsk on a une requête DELETE et cette requête renvoie 1 ou 0 

	}

	function findContactById($id){
		$sql = "SELECT * FROM contact WHERE idContact=$id";

		global $base;

		return $base->query($sql)->fetch(); //fetch() car la requete renvoie au plus un resultat
	}

	function updateContact($id,$nom,$prenom,$tel){
		$sql = "UPDATE contact SET nomContact='$nom', prenomContact='$prenom', telContact='$tel' WHERE idContact=$id";

		global $base;

		return $base->exec($sql); // exec() prsk requete UPDATE
	}
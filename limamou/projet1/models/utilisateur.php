<<?php 
function rechercheUser($login,$mdp)
{	
	$users=[
			[
			'login'=>'lima',
			'mdp'=>'layy',
			'nom'=>'Ndjine',
			'prenom'=>'Njinoo ',
			'profil'=>'etudiant'
			],
			[
			'login'=>'yafy',
			'mdp'=>'mben',
			'nom'=>'mbengue',
			'prenom'=>'yafy',
			'profil'=>'etudiant'
			],
			[
			'login'=>'atou',
			'mdp'=>'toua',
			'nom'=>'faye',
			'prenom'=>'atoumane',
			'profil'=>'etudiant'
			],
			[
			'login'=>'babs',
			'mdp'=>'bab',
			'nom'=>'mbengue',
			'prenom'=>'babacar laye',
			'profil'=>'tailleur'
			],
			[
			'login'=>'mousse',
			'mdp'=>'baye',
			'nom'=>'diop',
			'prenom'=>'baye mousse',
			'profil'=>'electicien'
			]

	];

		foreach ($users as $user) {
	if(strtolower(trim($login))==strtolower($user['login'])&&
		$mdp==$user['mdp'])
	{
		return $user;
	}
}

		return false;

}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Les bases du PHP</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Cours 2 PHP</h1>
	<h2>Programme :</h2>
	<ul>
		<li>Les tableaux numérotés</li>
		<li>Les tableaux associatifs</li>
		<li>Les variables super-globales</li>
	</ul>
	<hr>
</body>
</html>

<?php 
echo "<div><h3>Les tableaux numérotés</h3>";
    $notes[] = 12;
    $notes = [18, 16, 17, 14, 15];
    print_r($notes);
    var_dump($notes);
echo '<hr></div>';

echo "<div><h3>Les tableaux associatifs</h3>";
    $notes = [
        'note1' => 18,
        'note2' => 16,
        'note3' => 17,
        'note4' => 14,
        'note5' => 15
    ];
    print_r($notes);
    var_dump($notes);
echo '<hr></div>';

echo "<div><h3>Tableau de tableau</h3>";
    $etudiants = [
        [
            'nom' => 'DIAW',
            'prenom' => 'Djiadji',
            'classe' => 'L2GL',
            'notes' => [18, 17, 18]
        ],
        [
            'nom' => 'GUISSE',
            'prenom' => 'Iso',
            'classe' => 'L3Info',
            'notes' => [16, 15, 18]
        ],
        [
            'nom' => 'NIANG',
            'prenom' => 'Aicha',
            'classe' => 'L1MPI',
            'notes' => [14, 17, 12]
        ]
    ];

    var_dump($etudiants);
    var_dump($etudiants[0]['nom']);
echo '<hr></div>';

echo "<div><h3>Les variables super-globales</h3>";
    echo '<p>$_SERVER</p>';
    var_dump($_SERVER);
    echo '<p>$_GET</p>';
    var_dump($_GET);
echo '<hr></div>';

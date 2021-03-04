<ul>
    <li>Les tableaux numérotés </li>
    <li>Les tableaux associatifs</li>
    <li>Les variables super-globales</li>
</ul>

<?php
    echo "<h3>Tableaux numérotés</h3>";
    $notes[0] = 12;
    $notes = [14,16,15.5,18.5];
    $notes[] = 20;
    echo "Affichage avec print_r()<br>";
    print_r($notes);
    echo "<br>Affichage avec var_dump()<br>";
    var_dump($notes);
    echo "<hr>";
    echo "<h3>Tableaux associatifs</h3>";

    $notes = ['note1' => 15,
              'note2' => 20,
    ];
    var_dump($notes);
    echo "<br>";
    $notes = array('note1' => 15,
                    'note2' => 20,
    );
    var_dump($notes);
    echo "<br>";
    $etudiants = array(
                    [
                        'nom'      => 'Diop',
                        'prenom'   => 'Mbaye',
                        'Classe'   => 'L2gl',
                        'notes'    => [13,15.5,19.5]
                    ],
                    [
                        'nom'      => 'Diallo',
                        'prenom'   => 'Kadiatou',
                        'Classe'   => 'L2gl',
                        'notes'    => [9,16,20]
                    ]
                    );
    var_dump($etudiants);

    echo "<hr>";
    echo "<h3>Les variables super-globales</h3>";
    var_dump($_SERVER);
    echo("<br>");
    var_dump($_GET);

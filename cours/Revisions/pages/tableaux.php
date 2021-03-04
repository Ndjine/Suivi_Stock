<h1>LES TABLEAUX</h1>
<?php
    //Tableaux numérotés
    $entiers = [12,14,17,11,4];
    echo "Affichage du tableau avec for <br>";
    // Deux fonctions qui renvoient le nombre d'éléments d'un tableau
// sizeof() et count()
    for ($i = 0; $i < sizeof($entiers); $i++){
        echo $entiers[$i]." | ";
    }

    echo "<br> Affichage avec foreach<br>";
    foreach ($entiers as $c => $val){
        echo $val.' - ';
    }

    echo "<br>Affichage du tableau dans un tableau HTML";
?>
    <table border="1" width="25%">
        <tr>
            <?php
                for ($i=0; $i< count($entiers); $i++){
                    $couleur = 'AB00'.$i;
                    echo "<td bgcolor='$couleur'>$entiers[$i]</td>";
                }
            ?>
        </tr>
    </table>

<?php

    $article1 = array(
        "code" => "A1",
        "libelle" => "Casque",
        "prix" => "1000",
        "qte" => "4"
    );

$article2 = array(
    "code" => "A2",
    "libelle" => "Marqueur",
    "prix" => "100",
    "qte" => "45"
);
$article3 = array(
    "code" => "A3",
    "libelle" => "Craie",
    "prix" => "25",
    "qte" => "40"
);

$tabArticles = [$article1,$article2,$article3];
echo "Affichage d'un article <br>";
    foreach ($article1 as $value){
        echo $value."   /   ";
    }

    echo "<br>Affichage du tableau d'articles<br>";

    for ($i=0; $i< sizeof($tabArticles); $i++){
        foreach ($tabArticles[$i] as $value){
            echo $value."   /   ";
        }
        echo "<br>";
    }
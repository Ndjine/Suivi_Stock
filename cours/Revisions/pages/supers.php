<h1>Les Variables SuperGlobales</h1>
<?php
    echo 'Affichage de la variable $_SERVER';
    //var_dump($_SERVER);
?>
<form method="post">
    <pre>
        NOM :
        <input type="text" name="nom">
        PRENOM :
        <input type="text" name="prenom">
        <input type="submit" name="btn" value="Valider">
    </pre>
</form>

<?php
// Tous les names du formulaire de method="post" représentent les
// clés du tableau $_POST
// La fonction extract($_POST) permet de considérer tous les names
// du formulaire comme des variables. On aura plus besoin
// de mettre $_POST['nameForm'] pour recupérer la valeur saisie
// au niveau du champ
    if(isset($_POST['btn'])){
        extract($_POST);
        echo "Vous vous appelé $prenom $nom";
    }

    //Appel de fonction
/**
 * La fonction à appeler se trouve dans le functions.php
 * il faudra un require_once du fichier pour que ttes les fonctions soient
 * visibles
 *
 */
require_once "fonctions/functions.php";
echo "<br>";
afficherDate();
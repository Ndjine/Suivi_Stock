<?php  
session_start();
    include_once ('../header.php');

    if(empty($_SESSION))//empty()est une foncion qui return true si varialble n
    //n'est pas vide et false dans le cas contraire
    {
    	header("location:/limamou/projet1");
    }

    echo "<div class='container col-md-6'>BIENVENUE ".ucfirst($_SESSION['prenom'])." ".
    strtoupper($_SESSION['nom'])."</div>";
//ucfirst met en majuscule le premier lettre
    //strtoupper met tout en majuscule
    include_once('../menu.php');

 ?>


<?php
session_start();
require_once 'models/profilBD.php';
require_once 'models/employeBD.php';

if (empty($_SESSION)){
    header("location:/banque_l2gl");
}

if (isset($_GET['btnDecon'])){
    session_unset();
    header("location:/banque_l2gl");
}

include_once 'header.php';
include_once 'topBar.php';


if (isset($_GET['p'])){
    switch ($_GET['p']){
        case 'accueil':
            include_once 'bienvenue.php';
            break;
        case 'gProfil':
            $profils = getProfils();
            include_once 'views/profil/indexProfil.php';
            break;
        case 'gEmploye':
            $employes = getEmployes();
            include_once 'views/employe/indexEmploye.php';
            break;
        case 'ajoutProfil':
            include_once 'views/profil/addProfil.php';
            break;
        case 'modifierProfil' :
            $profil = findProfilById($_GET['idP']);
            include_once 'views/profil/updateProfil.php';
            break;
        case 'ajoutEmploye' :
            $numeroGenere = genererNumeroEmploye();
            $profils = getProfils();
            include_once 'views/employe/addEmploye.php';
            break;

        case 'modifierEmploye':
            $id = $_GET['idE'];
            $employeAModifier = findEmployeById($id);
            $profils = getProfils();
            include  'views/employe/updateEmploye.php';
            break;

        default:
            include_once 'erreur.php';
    }
} else{
    include_once 'bienvenue.php';
}
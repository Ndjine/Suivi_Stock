<?php
    include_once 'pages/menu.php';
?>

<div class="contenu">
    <?php
        if (isset($_GET['page'])){
            switch ($_GET['page']){
                case 'accueil':
                    include_once 'pages/accueil.php';
                    break;
                case 'tableaux':
                    include_once 'pages/tableaux.php';
                    break;
                case 'supers':
                    include_once 'pages/supers.php';
                    break;
                default:
                    include_once 'pages/erreur.php';
            }
        } else{
            include_once 'pages/accueil.php';
        }
    ?>
</div>

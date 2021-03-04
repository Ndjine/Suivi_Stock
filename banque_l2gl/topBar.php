<nav class="navbar navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?p=accueil">Accueil
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=gProfil" <?= (strtolower($_SESSION['profil']) == 'chef agence') ? '':'hidden' ?>>Gestion Profils</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=gEmploye" <?= (strtolower($_SESSION['profil']) == 'chef agence') ? '':'hidden' ?>>Gestion Employés</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?p=gClient" <?= (strtolower($_SESSION['profil']) == 'chef agence' || strtolower($_SESSION['profil']) == 'gestionnaire compte') ? '':'hidden' ?>>Gestion Clients</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="?p=gCompte" <?= (strtolower($_SESSION['profil']) == 'chef agence' || strtolower($_SESSION['profil']) == 'gestionnaire compte') ? '':'hidden' ?>>Gestion Comptes</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="?p=gOperation" <?= (strtolower($_SESSION['profil']) == 'chef agence' || strtolower($_SESSION['profil']) == 'caissier') ? '':'hidden' ?>>Gestion Opérations</a>
            </li>
        </ul>
        <span class="navbar-text white-text">
            <a href="?btnDecon" class="btn btn-danger btn-sm">Se déconnecter</a>
        </span>
    </div>
</nav>
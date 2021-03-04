<?php
    /*
     * les fonctions en PHP s'écrivent
     * function(parametre){
     *   corps de la fonction
     * }
     * S'il ya à la fin le mot clé return on considère une fonction
     * Dans le cas contraire c'est une procédure
     */

    function afficherDate(){
        /*
         * date(format) est une fonction qui prend en paramètre le format
         * d'une date et affiche la date actuelle
         * Si on écrit m Le mois sera affiché comme un entier
         * Si M le mois est affiché en Toute lettres
         * si y les 2 derniers chiffres de l'année
         * si Y tous les chiffres de l'année
         */
        echo "On est le ".date("d-m-Y à h : i : s");
    }
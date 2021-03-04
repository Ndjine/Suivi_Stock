<?php
require_once 'src\entities\Roles.php';
require_once 'src\entities\RolesUsers.php';
require_once 'src\entities\Users.php';
//creation objet
$r = new Roles();
$r->set_id(1);
$r->set_libelle('Technitient');
$us = new Users();
$us->set_id(1);
$us->set_nom('Ndjinoo');
$us->set_prenom('Ndjine');
$us->set_email('ndjinoo@gmail.com');
$ru = new RolesUsers();
$ru->set_idR($r);
$ru->set_idU($us);
echo $r->get_libelle();
echo(" | ");
echo $us->get_prenom();
echo(" | ");
echo $us->get_nom();
echo(" | ");
echo $ru->get_idR()->get_id();
echo(" | ");
echo $us->get_email();


?>
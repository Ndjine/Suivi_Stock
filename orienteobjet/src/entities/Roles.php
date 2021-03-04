<?php
class Roles{
    private $id;
    private $libelle;

//methode
public function set_id($id)
{
    $this->id = $id;
}
public function get_id()
{
    return $this->id ;
}
public function set_libelle($libelle)
{
    $this->libelle = $libelle;
}
public function get_libelle()
{
    return $this->libelle ;
}
}
?>
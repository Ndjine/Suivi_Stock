<?php
class Produit{
    private $ref;
    private $nom;
    private $qtStock;
    private $id;
    
    public function set_id($id)
    {
        $this->id =$id;
    }
    public function set_nom($nom)
    {
        $this->nom =$nom;
    }
    public function set_ref($ref)
    {
        $this->ref =$ref;
    }
    public function set_qtStock($qtStock)
    {
        $this->qtStock =$qtStock;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function get_ref()
    {
        return $this->ref;
    }
    public function get_qtStock()
    {
        return $this->qtStock;
    }
}

?>
<?php
class RolesUsers{
   private $idR;
    private $idU;
  
    public function set_idR($idR)
    {
        $this->idR =$idR;
    }
    public function set_idU($idU)
    {
        $this->idU =$idU;
    }
    public function get_idU()
    {
         return $this->idU ;
    }
    public function get_idR()
    {
         return $this->idR ;
    }
}
?>
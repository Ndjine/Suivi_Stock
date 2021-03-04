<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 *@ORM\Entity @ORM\Table(name="roles")
**/
class Roles
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
     /** @ORM\Column(type="string")**/
    private $nom;
    /**
 * Many Roles have Many User.
 * @ORM\ManyToMany(targetEntity="User", inversedBy="roles")
 */
    private $users;

    public function __contruct()
    {
        $this->users = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getUser()
    {
        return $this->users;
    }
    public function setUser($users)
    {
        $this->users = $users;
    }
    
}
?>
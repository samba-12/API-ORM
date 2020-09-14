<?php
//namespace Class1;
//require_once '../Config/autoload.php';
//use Dbaccess;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
//use Doctrine\ORM\Annotation as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Entreprise")
 */

Class Entreprise
{
    //  Les propriétes de la class

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $numerocompte;
    /**
     * @ORM\Column(type="string") 
     */
    private $nomentreprise;
    /**
     *  @ORM\Column(type="string")
     */
    private $adresse;
    /**
     *  @ORM\Column(type="string") 
     */
    private $email;
    /** 
     * @ORM\Column(type="string") 
     */
    private $telephone;
    /**
     * @ORM\Column(type="integer") 
     */
    private $ninea;
    /**
     * @ORM\Column(type="string") 
     */
    private $typecompte;
   

  //Constructeur Methode a appeler des qu'on instancie l'objet
  //pour creer un objet j'ai besoin de nom adress email....
    public function __construct()
    {
        $this->operations = new ArrayCollection();
        $this->Entreprise = new ArrayCollection();


    }

   
    public function getNomentreprise()
    {
        return $this->nomentreprise;
    }
    public function setNomentreprise($nomentreprise)
    {
        $this->nomentreprise = $nomentreprise;
    }

    //GET ET SET
    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
    }


    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    //GET ET SET



    public function getTelephone(){
        return $this->telephone;
    }
    public function setTelephone($telephone){
        $this->telephone=$telephone;
    }
  
    
    public function getNinea()
    {
        return $this->ninea;
    }
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

  
    //GET ET SET

    public function getCompte(){
        return $this->compte;
    }
    public function setCompte($compte){
        $this->compte=$compte;
    }
    


    
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}
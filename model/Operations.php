<?php
//require_once '../Config/autoload.php';
//use Dbaccess;
//use  Class1\Entreprise;
//use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;
//use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
/**
 * @ORM\Entity
 * @ORM\Table(name="Operations")
 */

Class Operations
{
    //  Les propriétes de la class

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $idoperation;
    
    /**
     * @ManyToOne(targetEntity="Entreprise")
     * @JoinColumn(name="numerocompte", referencedColumnName="numerocompte")
     */
    private $numerocompte;
    /**
     *  @ORM\Column(type="string")
     */
    private $typeoperation;
    
    /** 
     * @ORM\Column(type="decimal") 
     */
    private $montant;
    /**
     * @ORM\Column(type="decimal") 
     */
    private $solde;
    /**
     * @ORM\Column(type="datetime") 
     */
    private $dateoperation;
   

  //Constructeur Methode a appeler des qu'on instancie l'objet
  //pour creer un objet j'ai besoin de nom adress email....
    public function __construct()
    {
    }

   

    /**
     * Get the value of typeoperation
     */ 
    public function getTypeoperation()
    {
        return $this->typeoperation;
    }

    /**
     * Set the value of typeoperation
     *
     * @return  self
     */ 
    public function setTypeoperation($typeoperation)
    {
        $this->typeoperation = $typeoperation;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @return  self
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get the value of dateoperation
     */ 
    public function getDateoperation()
    {
        return $this->dateoperation;
    }

    /**
     * Set the value of dateoperation
     *
     * @return  self
     */ 
    public function setDateoperation($dateoperation)
    {
        $this->dateoperation = $dateoperation;

        return $this;
    }

    /**
     * Get the value of identreprise
     */ 
    public function getIdentreprise()
    {
        return $this->identreprise;
    }

    /**
     * Set the value of identreprise
     *
     * @return  self
     */ 
    public function setIdentreprise($identreprise)
    {
        $this->identreprise = $identreprise;

        return $this;
    }
}
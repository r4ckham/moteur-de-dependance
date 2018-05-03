<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 14:49
 */

namespace Entity;

use Entity\Addresse;
use Interfaces\InterfacePersonne;

class Personne implements InterfacePersonne
{
    private $addresse;
    private $nom;
    private $prenom;

    public function __construct(InterfaceAddresse $address , $nom , $prenom)
    {
        $this->addresse = $address;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return InterfaceAddresse
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNomComplet()
    {
        return "Nom : $this->nom ; Prenom : $this->prenom";
    }


}
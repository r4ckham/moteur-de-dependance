<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 15:04
 */

namespace Entity;

class UsinePersonne
{
    private $addresse ;

    public function createPersonne($numero , $rue , $codePostal , $ville , $nom , $prenom)
    {
        $this->addresse = new Addresse($numero , $rue , $codePostal , $ville);

        return new Personne($this->addresse , $nom , $prenom);
    }

    private function getCodePostalFromArrondissement($arrondissement)
    {
        return 75000 + $arrondissement;
    }

    public function createParisien($number, $street, $arrondissement , $nom , $prenom)
    {
        return $this->createPersonne($number, $street, $this->getCodePostalFromArrondissement($arrondissement), 'Paris', 'France' , $nom , $prenom);
    }

}

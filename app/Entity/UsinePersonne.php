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
    public function createPersonne($numero , $rue , $codePostal , $ville)
    {
        $addresse = new Addresse($numero , $rue , $codePostal , $ville);

        return new Personne($addresse);
    }

    private function getCodePostalFromArrondissement($arrondissement)
    {
        return 75000 + $arrondissement;
    }

    public function createParigot($number, $street, $arrondissement)
    {
        return $this->createPersonne($number, $street, $this->getCodePostalFromArrondissement($arrondissement), 'Paris', 'France');
    }

}
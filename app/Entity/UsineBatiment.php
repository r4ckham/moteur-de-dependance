<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 16:16
 */
namespace Entity;


class UsineBatiment
{
    public function createBatiment($numero , $rue , $codePostal , $ville)
    {
        $addresse = Addresse($numero , $rue , $codePostal , $ville);

        return new Batiment($addresse);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 15:27
 */

namespace Entity;


use Interfaces\InterfaceAddresse;

class AddresseBasique implements InterfaceAddresse
{
    private $adresseBasqiue;

    public function __construct($adresseEnLigne)
    {
        $this->adresseBasqiue = $adresseEnLigne;
    }

    public function getAddresseComplete()
    {
        return $this->adresseBasqiue;
    }
}
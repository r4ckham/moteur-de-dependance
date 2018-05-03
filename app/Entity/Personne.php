<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 14:49
 */

namespace Entity;

use Addresse;
use Interfaces\InterfaceAddresse;

class Personne
{
    private $addresse;

    public function __construct(InterfaceAddresse $address)
    {
        $this->addresse = $address;
    }

    /**
     * @return InterfaceAddresse
     */
    public function getAddresse()
    {
        return $this->addresse;
    }


}
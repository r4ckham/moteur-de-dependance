<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 15:17
 */

namespace Entity;

use Interfaces\InterfaceAddresse;


class AddresseBasqiue implements InterfaceAddresse
{
    private $addresse ;

    public function getAddresseComplete()
    {
        return $this->addresse;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 16:16
 */

namespace Entity;


use Interfaces\InterfaceAddresse;

class Batiment
{
    private $adresse ;

    public function __construct(InterfaceAddresse $adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return InterfaceAddresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 14:46
 */
namespace Entity;

use Interfaces\InterfaceAddresse;

class Addresse implements InterfaceAddresse
{
    private $numero;
    private $rue;
    private $codePostale;
    private $ville;

    public function __construct($numero, $rue, $codePostal, $ville)
    {
        $this->numero = $numero;
        $this->rue = $rue;
        $this->codePostale = $codePostal;
        $this->ville = $ville;
    }

    public function getAddresseComplete()
    {
        return "$this->numero , $this->rue , $this->codePostale , $this->codePostale .";
    }
}

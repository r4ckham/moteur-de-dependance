<?php
/**
 * Created by PhpStorm.
 * User: ugo
 * Date: 03/05/2018
 * Time: 14:49
 */
use Addresse;

class Personne
{
    private $addresse;

    public function __construct(Addresse $address)
    {
        $this->addresse = $address;
    }


}
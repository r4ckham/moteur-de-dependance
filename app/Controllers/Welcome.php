<?php
/**
 * Welcome controller.
 *
 * @author David Carr - dave@daveismyname.com
 *
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */
namespace Controllers;

use Core\Controller;
use Core\View;
use Entity\AddresseBasique;
use Entity\Personne;
use Entity\UsinePersonne;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{
    /**
     * Call the parent construct.
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
    }

    /**
     * Define Index page title and load template files.
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');

        $factory = new UsinePersonne();

        $personne = $factory->createPersonne(15 , 'avenue de la liberté' , 34000 , 'Montpellier' , "Rougelot" , "Ugo");

        $parisien = $factory->createParisien(1, 'Rue de la Paix', 14 , "Parichien" , "Jean-michel");
        $addresseDeParis = $parisien->getAddresse()->getAddresseComplete();

        var_dump( $personne->getNomComplet() , $personne->getAddresse() , $addresseDeParis);

        View::renderTemplate('header', $data);
        View::render('welcome/welcome', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files.
     */
    public function subPage()
    {
        $data['title'] = $this->language->get('subpage_text');
        $data['welcome_message'] = $this->language->get('subpage_message');

        View::renderTemplate('header', $data);
        View::render('welcome/subpage', $data);
        View::renderTemplate('footer', $data);
    }
}

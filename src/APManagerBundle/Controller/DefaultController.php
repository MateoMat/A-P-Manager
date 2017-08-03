<?php

namespace APManagerBundle\Controller;

use APManagerBundle\APManagerBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use APManagerBundle\Entity\Pharmacy;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="")
     */
    public function indexAction()
    {
        




        return $this->render('APManagerBundle:Default:index.html.twig');
    }
}

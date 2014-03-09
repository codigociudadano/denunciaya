<?php

namespace CodigoCiudadano\DenunciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends DenunciaBaseController
{
    public function indexAction()
    {
        return $this->render('CodigoCiudadanoDenunciaBundle:Default:index.html.twig', array('name' => 'foo'));
    }
}

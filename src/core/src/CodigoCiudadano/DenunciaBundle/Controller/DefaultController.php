<?php

namespace CodigoCiudadano\DenunciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends DenunciaBaseController
{
    const ENTITY = 'CodigoCiudadanoDenunciaBundle:Denuncia';

    public function indexAction()
    {
        $userInfo = $this->renderUserInfo();

        $denuncias = $this->getDoctrine()
            ->getRepository(self::ENTITY)
            ->findAllPublished();

        return $this->render('CodigoCiudadanoDenunciaBundle:Default:index.html.twig',
            array(
                'userInfo' => $userInfo,
                'denuncias' => $denuncias,
            )
        );


    }
}

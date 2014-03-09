<?php

namespace CodigoCiudadano\DenunciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DenunciaBaseController extends Controller
{
    /**
     * Will render user information or the login form.
     */
    public function renderUserInfo() {
        $user = $this->getUser();

        if (empty($user)) {
            //render login form.
            $request = $this->container->get('request_stack')->getCurrentRequest();
            $session = $request->getSession();

            // get the error if any (works with forward and redirect -- see below)
            if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
            } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
                $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
                $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            } else {
                $error = '';
            }

            if ($error) {
                // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
                $error = $error->getMessage();
            }

            $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

            $csrfToken = $this->container->has('form.csrf_provider')
                ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
                : null;

            return $this->renderView('CodigoCiudadanoDenunciaBundle:User:partial_user_login.html.twig',
                array(
                    'last_username' => $lastUsername,
                    'error'         => $error,
                    'csrf_token' => $csrfToken,
                )
            );
        }

        return $this->renderView('CodigoCiudadanoDenunciaBundle:User:partial_user_info.html.twig',
            array('user' => $user)
        );
    }
}

<?php

namespace Pnv\SaisieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * SecurityController
 *
 * Cette classe ne comporte pas la syntaxe pour la prise en charge des annotations car la gestion du login est pris en charge par le core Symfony2 et cette gestion de base sur la lecture du fichier security.yml et routing.yml
 * Tout le projet se base sur les annotations donc sans besoin de routing.yml sauf pour la page de login
 */
class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
		
        // Gestion des erreurs sur le login
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('PnvSaisieBundle:Security:login.html.twig', array(
            // Gestion du dernier utilisateur qui s'est connecté
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
}
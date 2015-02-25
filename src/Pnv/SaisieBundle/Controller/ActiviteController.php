<?php

namespace Pnv\SaisieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Pnv\SaisieBundle\Entity\Activite;
use Pnv\SaisieBundle\Form\Type\ActiviteType;

/**
 * @Route("/activite")
 */
 
 // Cette classe est le pivot entre la vue coté client et la BDD coté serveur en faisant appel aux méthodes des classes en gestion de l'accès à la BDD, aux objets de la BDD, des formulaires...
 // Le projet étant basé sur les annotations Symfony, les redirections (routing) entre les pages de l'application gérée par cette classe se fait avec l'argument @route en en-tête de chaque méthode
class ActiviteController extends Controller
{
	/**
     * @Route("/", name="activite_index")
     * @Template()
     */
    public function indexAction()
    {
        $activite = $this->get('pnvsaisie.activite_manager')->getRepository('PnvSaisieBundle:Activite')->findAll();

        return $this->render('PnvSaisieBundle:Activite:index.html.twig', array('activite' => $activite));
    }
	
	/**
	 * @Route("/show/{activiteId}", name="activite_show")
	 * @Template()
	 */
	public function showAction($activiteId)
	{
		if (!$activite = $this->get('pnvsaisie.activite_manager')->loadActivite($activiteId)) {
			throw new NotFoundHttpException($this->get('translator')->trans('Cette activité KO'));
		}
		
		return array('activite' => $activite);
	}
	
	/**
	 * @Route("/add", name="activite_add")
	 * @Template()
	 */
	public function addAction()
	{
		$request = $this->get('request'); // On récupère l'objet request via le service container
		$activite = new Activite(); // On créé notre objet Activite vierge ou rempli
		
		$form = $this->createForm(new ActiviteType(), $activite); // Création de l'objet formulaire vierge ou rempli
		//$form = $this->get('form.factory')->create(new DeskType(), $desk); // Autre façon de faire. On bind l'objet Activite à notre formulaire ActiviteType
		
		// Passage dans cette partie si le formulaire a été soumis = POST => si on rentre dans le if, le return new RedirectResponse termine la méthode, le return array('form' n'est pas lancé.
		if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
			$form->handleRequest($request); // On récupère les données du form
			if ($form->isValid()) { // Si le formulaire est valide on continue
				
				$this->get('pnvsaisie.activite_manager')->saveActivite($activite); // On utilise notre Manager pour gérer la sauvegarde de l'objet
				
				return new RedirectResponse($this->generateUrl('activite_index', array(
					'activite' => $activite
				)));
			}
		}
		// ce return est exécuté si la requête ne POST pas = création du formulaire pour la saisie
		return array('form' => $form->createView(), 'activite' => $activite); // On passe à Twig l'objet form et l'objet Activite
	}
	
	/**
     * @Route("/edit/{activiteId}", name="activite_edit")
     */
    public function editAction($activiteId)
    {
        $request = $this->get('request');
        
        // On vérifie que l'ID du bureau existe
        if (!$activite = $this->get('pnvsaisie.activite_manager')->loadactivite($activiteId)) {
            throw new NotFoundHttpException(
                $this->get('translator')->trans('KO pour cet id')
            );
        }
        
        // On charge l'activité récupéré depuis la BDD au formulaire pour modification
        $form = $this->get('form.factory')->create(new activiteType(), $activite);
        
        // Si l'utilisateur soumet le formulaire
        if ('POST' == $request->getMethod()) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                
                $this->get('pnvsaisie.activite_manager')->saveactivite($activite);

                return new RedirectResponse($this->generateUrl('activite_index'));
            }
        }

        return $this->render('PnvSaisieBundle:Activite:add.html.twig',array('form' => $form->createView(), 'activite' => $activite)); // On change le template par défaut et on réutilise celui de add qui est le même
    }
	
	/**
     * @Route("/delete/{activiteId}", name="activite_delete")
     */
	public function deleteAction($activiteId)
    {
        $activite = $this->get('pnvsaisie.activite_manager')->getRepository('PnvSaisieBundle:Activite')->find($activiteId);
		if (!$activite) {
                throw $this->createNotFoundException('Impossible de trouver activité');
            }
		$this->get('pnvsaisie.activite_manager')->removeactivite($activite);

		return new RedirectResponse($this->generateUrl('activite_index'));
    }
	
	/**
	 * @Route("/test", name="activite_test")
	 * @Template()
	 */
	// méthode utilisée au début pour tester l'appli. Elle ne rentre pas dans le processus CRUD
	public function testAction()
	{
		$id = 13; // ID du bureau de test que l'on a enregistré précédemment
		
		$activite = $this->getDoctrine()->getRepository('PnvSaisieBundle:Activite')->find($id);
		
		return array('activite' => $activite);
	}


}
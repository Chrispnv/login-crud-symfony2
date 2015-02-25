<?php

namespace Pnv\SaisieBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pnv\SaisieBundle\Manager\BaseManager;
use Pnv\SaisieBundle\Entity\Activite;

/**
 * ActiviteManager
 *
 * Classe dans laquelle sont créées les méthodes de dialogue avec la BDD. Cette classe fait appel à la classe BaseManager.php
 */
class ActiviteManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
	
	/**
    * Load Activite entity
    *
    * @param $activiteId 
    */
    public function loadActivite($activiteId) {
        return $this->getRepository()
                ->findOneBy(array('idActivite' => $activiteId));
    }

    /**
    * Save Activite entity
    *
    * @param Activite $activite 
    */
    public function saveActivite(Activite $activite)
    {
        $this->persistAndFlush($activite);
    }
	
	/**
    * Remove Activite entity
    *
    * @param Activite $activite 
    */
    public function removeActivite(Activite $activite)
    {
        $this->removeAndFlush($activite);
    }

    public function getRepository()
    {
        return $this->em->getRepository('PnvSaisieBundle:Activite');
    }

}
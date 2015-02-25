<?php

namespace Pnv\SaisieBundle\Manager;

/**
 * BaseManager
 *
 * Classe de base qui utilise le service manager Symfony. Utilisation des méthodes Doctrine de dialogue avec la BDD pour créer des méthodes récurentes d'actions sur la BDD
 */
abstract class BaseManager
{
    protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }
	
	protected function removeAndFlush($entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}
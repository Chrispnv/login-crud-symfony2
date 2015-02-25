<?php

namespace Pnv\SaisieBundle\Manager;

/**
 * BaseManager
 *
 * Classe de base qui utilise le service manager Symfony. Utilisation des m�thodes Doctrine de dialogue avec la BDD pour cr�er des m�thodes r�curentes d'actions sur la BDD
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
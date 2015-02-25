<?php

namespace Pnv\SaisieBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ActiviteRepository
 *
 * Cette classe contient des m�thodes personnalis�es d'acc�s � la BDD
 */
class ActiviteRepository extends EntityRepository
{

	public function getLastPosted($limit = 5)
	{
		return $this->createQueryBuilder('d')
		->where('d.isEnabled = :enabled')
		->setParameter('enabled', true)
		->addOrderBy('d.updatedAt', "DESC")
		->addOrderBy('d.id', "DESC")
		->setMaxResults($limit);
	}


}
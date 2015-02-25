<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoSemaine
 *
 * @ORM\Table(name="dico_semaine")
 * @ORM\Entity
 */
class DicoSemaine
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_semaine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_semaine_id_semaine_seq", allocationSize=1, initialValue=1)
     */
    private $idSemaine;



    /**
     * Get idSemaine
     *
     * @return integer 
     */
    public function getIdSemaine()
    {
        return $this->idSemaine;
    }
	
	/**
     * Get libSemaine
     *
     * @return string 
     */
    public function getLibSemaine()
    {
        return $this->libSemaine;
    }
	
	public function __toString() 
	{
		return $this->libSemaine;
	}
}

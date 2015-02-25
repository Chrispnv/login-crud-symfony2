<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoMaitrise
 *
 * @ORM\Table(name="dico_maitrise")
 * @ORM\Entity
 */
class DicoMaitrise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_maitrise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_maitrise_id_maitrise_seq", allocationSize=1, initialValue=1)
     */
    private $idMaitrise;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_maitrise", type="string", length=500, nullable=true)
     */
    private $libMaitrise;



    /**
     * Get idMaitrise
     *
     * @return integer 
     */
    public function getIdMaitrise()
    {
        return $this->idMaitrise;
    }

    /**
     * Set libMaitrise
     *
     * @param string $libMaitrise
     * @return DicoMaitrise
     */
    public function setLibMaitrise($libMaitrise)
    {
        $this->libMaitrise = $libMaitrise;

        return $this;
    }

    /**
     * Get libMaitrise
     *
     * @return string 
     */
    public function getLibMaitrise()
    {
        return $this->libMaitrise;
    }
	
	public function __toString() 
	{
		return $this->libMaitrise;
	}
}

<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoCommune
 *
 * @ORM\Table(name="dico_commune")
 * @ORM\Entity
 */
class DicoCommune
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commune", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_commune_id_commune_seq", allocationSize=1, initialValue=1)
     */
    private $idCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_commune", type="string", length=50, nullable=true)
     */
    private $libCommune;



    /**
     * Get idCommune
     *
     * @return integer 
     */
    public function getIdCommune()
    {
        return $this->idCommune;
    }

    /**
     * Set libCommune
     *
     * @param string $libCommune
     * @return DicoCommune
     */
    public function setLibCommune($libCommune)
    {
        $this->libCommune = $libCommune;

        return $this;
    }

    /**
     * Get libCommune
     *
     * @return string 
     */
    public function getLibCommune()
    {
        return $this->libCommune;
    }
	
	public function __toString() 
	{
		return $this->libCommune;
	}
}

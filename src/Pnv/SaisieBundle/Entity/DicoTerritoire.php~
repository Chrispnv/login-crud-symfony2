<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoTerritoire
 *
 * @ORM\Table(name="dico_territoire")
 * @ORM\Entity
 */
class DicoTerritoire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_territoire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_territoire_id_territoire_seq", allocationSize=1, initialValue=1)
     */
    private $idTerritoire;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_territoire", type="string", length=200, nullable=true)
     */
    private $libTerritoire;



    /**
     * Get idTerritoire
     *
     * @return integer 
     */
    public function getIdTerritoire()
    {
        return $this->idTerritoire;
    }

    /**
     * Set libTerritoire
     *
     * @param string $libTerritoire
     * @return DicoTerritoire
     */
    public function setLibTerritoire($libTerritoire)
    {
        $this->libTerritoire = $libTerritoire;

        return $this;
    }

    /**
     * Get libTerritoire
     *
     * @return string 
     */
    public function getLibTerritoire()
    {
        return $this->libTerritoire;
    }
	
	public function __toString() 
	{
		return $this->libTerritoire;
	}
}

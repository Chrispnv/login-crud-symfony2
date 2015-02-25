<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoDuree
 *
 * @ORM\Table(name="dico_duree")
 * @ORM\Entity
 */
class DicoDuree
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_duree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_duree_id_duree_seq", allocationSize=1, initialValue=1)
     */
    private $idDuree;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_duree", type="string", length=10, nullable=true)
     */
    private $libDuree;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bool_life", type="boolean", nullable=true)
     */
    private $boolLife;



    /**
     * Get idDuree
     *
     * @return integer 
     */
    public function getIdDuree()
    {
        return $this->idDuree;
    }

    /**
     * Set libDuree
     *
     * @param string $libDuree
     * @return DicoDuree
     */
    public function setLibDuree($libDuree)
    {
        $this->libDuree = $libDuree;

        return $this;
    }

    /**
     * Get libDuree
     *
     * @return string 
     */
    public function getLibDuree()
    {
        return $this->libDuree;
    }

    /**
     * Set boolLife
     *
     * @param boolean $boolLife
     * @return DicoDuree
     */
    public function setBoolLife($boolLife)
    {
        $this->boolLife = $boolLife;

        return $this;
    }

    /**
     * Get boolLife
     *
     * @return boolean 
     */
    public function getBoolLife()
    {
        return $this->boolLife;
    }
	
	public function __toString() 
	{
		return $this->libDuree;
	}
}

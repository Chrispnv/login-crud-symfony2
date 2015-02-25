<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoActiviteTransv
 *
 * @ORM\Table(name="dico_activite_transv")
 * @ORM\Entity
 */
class DicoActiviteTransv
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_activite_transv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_activite_transv_id_activite_transv_seq", allocationSize=1, initialValue=1)
     */
    private $idActiviteTransv;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_activite_transv", type="string", nullable=true)
     */
    private $libActiviteTransv;



    /**
     * Get idActiviteTransv
     *
     * @return integer 
     */
    public function getIdActiviteTransv()
    {
        return $this->idActiviteTransv;
    }

    /**
     * Set libActiviteTransv
     *
     * @param string $libActiviteTransv
     * @return DicoActiviteTransv
     */
    public function setLibActiviteTransv($libActiviteTransv)
    {
        $this->libActiviteTransv = $libActiviteTransv;

        return $this;
    }

    /**
     * Get libActiviteTransv
     *
     * @return string 
     */
    public function getLibActiviteTransv()
    {
        return $this->libActiviteTransv;
    }
	
	public function __toString() 
	{
		return $this->libActiviteTransv;
	}
}

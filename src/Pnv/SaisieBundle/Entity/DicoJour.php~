<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoJour
 *
 * @ORM\Table(name="dico_jour")
 * @ORM\Entity
 */
class DicoJour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_jour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_jour_id_jour_seq", allocationSize=1, initialValue=1)
     */
    private $idJour;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_jour", type="string", length=10, nullable=true)
     */
    private $libJour;



    /**
     * Get idJour
     *
     * @return integer 
     */
    public function getIdJour()
    {
        return $this->idJour;
    }

    /**
     * Set libJour
     *
     * @param string $libJour
     * @return DicoJour
     */
    public function setLibJour($libJour)
    {
        $this->libJour = $libJour;

        return $this;
    }

    /**
     * Get libJour
     *
     * @return string 
     */
    public function getLibJour()
    {
        return $this->libJour;
    }
}

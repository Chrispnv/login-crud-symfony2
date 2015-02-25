<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoService
 *
 * @ORM\Table(name="dico_service")
 * @ORM\Entity
 */
class DicoService
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_service", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_service_id_service_seq", allocationSize=1, initialValue=1)
     */
    private $idService;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_service", type="string", nullable=true)
     */
    private $libService;



    /**
     * Get idService
     *
     * @return integer 
     */
    public function getIdService()
    {
        return $this->idService;
    }

    /**
     * Set libService
     *
     * @param string $libService
     * @return DicoService
     */
    public function setLibService($libService)
    {
        $this->libService = $libService;

        return $this;
    }

    /**
     * Get libService
     *
     * @return string 
     */
    public function getLibService()
    {
        return $this->libService;
    }
}

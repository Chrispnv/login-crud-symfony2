<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoDomaineActivite
 *
 * @ORM\Table(name="dico_domaine_activite")
 * @ORM\Entity
 */
class DicoDomaineActivite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_domaine_acti", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_domaine_activite_id_domaine_acti_seq", allocationSize=1, initialValue=1)
     */
    private $idDomaineActi;

    /**
     * @var string
     *
     * @ORM\Column(name="num_domaine_acti", type="string", length=10, nullable=true)
     */
    private $numDomaineActi;

    /**
     * @var string
     *
     * @ORM\Column(name="acron_domaine_acti", type="string", length=10, nullable=true)
     */
    private $acronDomaineActi;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_domaine_acti", type="string", length=500, nullable=true)
     */
    private $libDomaineActi;

    /**
     * @var string
     *
     * @ORM\Column(name="info_domaine_acti", type="string", nullable=true)
     */
    private $infoDomaineActi;



    /**
     * Get idDomaineActi
     *
     * @return integer 
     */
    public function getIdDomaineActi()
    {
        return $this->idDomaineActi;
    }

    /**
     * Set numDomaineActi
     *
     * @param string $numDomaineActi
     * @return DicoDomaineActivite
     */
    public function setNumDomaineActi($numDomaineActi)
    {
        $this->numDomaineActi = $numDomaineActi;

        return $this;
    }

    /**
     * Get numDomaineActi
     *
     * @return string 
     */
    public function getNumDomaineActi()
    {
        return $this->numDomaineActi;
    }

    /**
     * Set acronDomaineActi
     *
     * @param string $acronDomaineActi
     * @return DicoDomaineActivite
     */
    public function setAcronDomaineActi($acronDomaineActi)
    {
        $this->acronDomaineActi = $acronDomaineActi;

        return $this;
    }

    /**
     * Get acronDomaineActi
     *
     * @return string 
     */
    public function getAcronDomaineActi()
    {
        return $this->acronDomaineActi;
    }

    /**
     * Set libDomaineActi
     *
     * @param string $libDomaineActi
     * @return DicoDomaineActivite
     */
    public function setLibDomaineActi($libDomaineActi)
    {
        $this->libDomaineActi = $libDomaineActi;

        return $this;
    }

    /**
     * Get libDomaineActi
     *
     * @return string 
     */
    public function getLibDomaineActi()
    {
        return $this->libDomaineActi;
    }

    /**
     * Set infoDomaineActi
     *
     * @param string $infoDomaineActi
     * @return DicoDomaineActivite
     */
    public function setInfoDomaineActi($infoDomaineActi)
    {
        $this->infoDomaineActi = $infoDomaineActi;

        return $this;
    }

    /**
     * Get infoDomaineActi
     *
     * @return string 
     */
    public function getInfoDomaineActi()
    {
        return $this->infoDomaineActi;
    }
}

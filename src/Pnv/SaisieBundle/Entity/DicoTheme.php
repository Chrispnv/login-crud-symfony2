<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoTheme
 *
 * @ORM\Table(name="dico_theme", indexes={@ORM\Index(name="fki_dico_theme_id_domaine_acti", columns={"id_domaine_acti"})})
 * @ORM\Entity
 */
class DicoTheme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_theme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_theme_id_theme_seq", allocationSize=1, initialValue=1)
     */
    private $idTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="num_theme", type="string", length=10, nullable=true)
     */
    private $numTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_theme", type="string", length=500, nullable=true)
     */
    private $libTheme;

    /**
     * @var string
     *
     * @ORM\Column(name="info_theme", type="string", nullable=true)
     */
    private $infoTheme;

    /**
     * @var \DicoDomaineActivite
     *
     * @ORM\ManyToOne(targetEntity="DicoDomaineActivite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domaine_acti", referencedColumnName="id_domaine_acti")
     * })
     */
    private $idDomaineActi;



    /**
     * Get idTheme
     *
     * @return integer 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }

    /**
     * Set numTheme
     *
     * @param string $numTheme
     * @return DicoTheme
     */
    public function setNumTheme($numTheme)
    {
        $this->numTheme = $numTheme;

        return $this;
    }

    /**
     * Get numTheme
     *
     * @return string 
     */
    public function getNumTheme()
    {
        return $this->numTheme;
    }

    /**
     * Set libTheme
     *
     * @param string $libTheme
     * @return DicoTheme
     */
    public function setLibTheme($libTheme)
    {
        $this->libTheme = $libTheme;

        return $this;
    }

    /**
     * Get libTheme
     *
     * @return string 
     */
    public function getLibTheme()
    {
        return $this->libTheme;
    }

    /**
     * Set infoTheme
     *
     * @param string $infoTheme
     * @return DicoTheme
     */
    public function setInfoTheme($infoTheme)
    {
        $this->infoTheme = $infoTheme;

        return $this;
    }

    /**
     * Get infoTheme
     *
     * @return string 
     */
    public function getInfoTheme()
    {
        return $this->infoTheme;
    }

    /**
     * Set idDomaineActi
     *
     * @param \Pnv\SaisieBundle\Entity\DicoDomaineActivite $idDomaineActi
     * @return DicoTheme
     */
    public function setIdDomaineActi(\Pnv\SaisieBundle\Entity\DicoDomaineActivite $idDomaineActi = null)
    {
        $this->idDomaineActi = $idDomaineActi;

        return $this;
    }

    /**
     * Get idDomaineActi
     *
     * @return \Pnv\SaisieBundle\Entity\DicoDomaineActivite 
     */
    public function getIdDomaineActi()
    {
        return $this->idDomaineActi;
    }
}

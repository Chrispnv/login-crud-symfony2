<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DicoAction
 *
 * @ORM\Table(name="dico_action", indexes={@ORM\Index(name="fki_dico_action_id_maitrise", columns={"id_maitrise"}), @ORM\Index(name="fki_dico_action_id_territoire", columns={"id_territoire"}), @ORM\Index(name="fki_id_theme", columns={"id_theme"})})
 * @ORM\Entity
 */
class DicoAction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_action", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_action_id_action_seq", allocationSize=1, initialValue=1)
     */
    private $idAction;

    /**
     * @var string
     *
     * @ORM\Column(name="num_action", type="string", length=10, nullable=true)
     */
    private $numAction;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_action", type="string", length=500, nullable=true)
     */
    private $libAction;

    /**
     * @var string
     *
     * @ORM\Column(name="info_action", type="string", nullable=true)
     */
    private $infoAction;

    /**
     * @var \DicoMaitrise
     *
     * @ORM\ManyToOne(targetEntity="DicoMaitrise")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_maitrise", referencedColumnName="id_maitrise")
     * })
     */
    private $idMaitrise;

    /**
     * @var \DicoTerritoire
     *
     * @ORM\ManyToOne(targetEntity="DicoTerritoire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_territoire", referencedColumnName="id_territoire")
     * })
     */
    private $idTerritoire;

    /**
     * @var \DicoTheme
     *
     * @ORM\ManyToOne(targetEntity="DicoTheme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_theme", referencedColumnName="id_theme")
     * })
     */
    private $idTheme;



    /**
     * Get idAction
     *
     * @return integer 
     */
    public function getIdAction()
    {
        return $this->idAction;
    }

    /**
     * Set numAction
     *
     * @param string $numAction
     * @return DicoAction
     */
    public function setNumAction($numAction)
    {
        $this->numAction = $numAction;

        return $this;
    }

    /**
     * Get numAction
     *
     * @return string 
     */
    public function getNumAction()
    {
        return $this->numAction;
    }

    /**
     * Set libAction
     *
     * @param string $libAction
     * @return DicoAction
     */
    public function setLibAction($libAction)
    {
        $this->libAction = $libAction;

        return $this;
    }

    /**
     * Get libAction
     *
     * @return string 
     */
    public function getLibAction()
    {
        return $this->libAction;
    }

    /**
     * Set infoAction
     *
     * @param string $infoAction
     * @return DicoAction
     */
    public function setInfoAction($infoAction)
    {
        $this->infoAction = $infoAction;

        return $this;
    }

    /**
     * Get infoAction
     *
     * @return string 
     */
    public function getInfoAction()
    {
        return $this->infoAction;
    }

    /**
     * Set idMaitrise
     *
     * @param \Pnv\SaisieBundle\Entity\DicoMaitrise $idMaitrise
     * @return DicoAction
     */
    public function setIdMaitrise(\Pnv\SaisieBundle\Entity\DicoMaitrise $idMaitrise = null)
    {
        $this->idMaitrise = $idMaitrise;

        return $this;
    }

    /**
     * Get idMaitrise
     *
     * @return \Pnv\SaisieBundle\Entity\DicoMaitrise 
     */
    public function getIdMaitrise()
    {
        return $this->idMaitrise;
    }

    /**
     * Set idTerritoire
     *
     * @param \Pnv\SaisieBundle\Entity\DicoTerritoire $idTerritoire
     * @return DicoAction
     */
    public function setIdTerritoire(\Pnv\SaisieBundle\Entity\DicoTerritoire $idTerritoire = null)
    {
        $this->idTerritoire = $idTerritoire;

        return $this;
    }

    /**
     * Get idTerritoire
     *
     * @return \Pnv\SaisieBundle\Entity\DicoTerritoire 
     */
    public function getIdTerritoire()
    {
        return $this->idTerritoire;
    }

    /**
     * Set idTheme
     *
     * @param \Pnv\SaisieBundle\Entity\DicoTheme $idTheme
     * @return DicoAction
     */
    public function setIdTheme(\Pnv\SaisieBundle\Entity\DicoTheme $idTheme = null)
    {
        $this->idTheme = $idTheme;

        return $this;
    }

    /**
     * Get idTheme
     *
     * @return \Pnv\SaisieBundle\Entity\DicoTheme 
     */
    public function getIdTheme()
    {
        return $this->idTheme;
    }
	
	public function __toString() 
	{
		return $this->libAction;
	}
}

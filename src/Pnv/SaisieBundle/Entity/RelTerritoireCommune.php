<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelTerritoireCommune
 *
 * @ORM\Table(name="rel_territoire_commune", indexes={@ORM\Index(name="fki_rel_commune", columns={"id_commune"}), @ORM\Index(name="IDX_EF7CA6B31DEFDF83", columns={"id_territoire"})})
 * @ORM\Entity
 */
class RelTerritoireCommune
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rel_terr_com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rel_territoire_commune_id_rel_terr_com_seq", allocationSize=1, initialValue=1)
     */
    private $idRelTerrCom;

    /**
     * @var \DicoCommune
     *
     * @ORM\ManyToOne(targetEntity="DicoCommune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commune", referencedColumnName="id_commune")
     * })
     */
    private $idCommune;

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
     * Get idRelTerrCom
     *
     * @return integer 
     */
    public function getIdRelTerrCom()
    {
        return $this->idRelTerrCom;
    }

    /**
     * Set idCommune
     *
     * @param \Pnv\SaisieBundle\Entity\DicoCommune $idCommune
     * @return RelTerritoireCommune
     */
    public function setIdCommune(\Pnv\SaisieBundle\Entity\DicoCommune $idCommune = null)
    {
        $this->idCommune = $idCommune;

        return $this;
    }

    /**
     * Get idCommune
     *
     * @return \Pnv\SaisieBundle\Entity\DicoCommune 
     */
    public function getIdCommune()
    {
        return $this->idCommune;
    }

    /**
     * Set idTerritoire
     *
     * @param \Pnv\SaisieBundle\Entity\DicoTerritoire $idTerritoire
     * @return RelTerritoireCommune
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
}

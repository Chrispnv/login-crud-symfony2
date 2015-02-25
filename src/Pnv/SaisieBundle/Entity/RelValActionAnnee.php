<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelValActionAnnee
 *
 * @ORM\Table(name="rel_val_action_annee", indexes={@ORM\Index(name="IDX_9511A81361FB397F", columns={"id_action"})})
 * @ORM\Entity
 */
class RelValActionAnnee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="annee_non_valide", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anneeNonValide;

    /**
     * @var \DicoAction
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="DicoAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_action", referencedColumnName="id_action")
     * })
     */
    private $idAction;



    /**
     * Set anneeNonValide
     *
     * @param integer $anneeNonValide
     * @return RelValActionAnnee
     */
    public function setAnneeNonValide($anneeNonValide)
    {
        $this->anneeNonValide = $anneeNonValide;

        return $this;
    }

    /**
     * Get anneeNonValide
     *
     * @return integer 
     */
    public function getAnneeNonValide()
    {
        return $this->anneeNonValide;
    }

    /**
     * Set idAction
     *
     * @param \Pnv\SaisieBundle\Entity\DicoAction $idAction
     * @return RelValActionAnnee
     */
    public function setIdAction(\Pnv\SaisieBundle\Entity\DicoAction $idAction)
    {
        $this->idAction = $idAction;

        return $this;
    }

    /**
     * Get idAction
     *
     * @return \Pnv\SaisieBundle\Entity\DicoAction 
     */
    public function getIdAction()
    {
        return $this->idAction;
    }
}

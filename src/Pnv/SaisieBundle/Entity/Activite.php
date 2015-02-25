<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 * Cette classe correspond � la table activite dans la BDD
 * Elle contient toutes les variables correspondant aux champs de la table et les m�thodes permettant d'y acc�der (= les accesseurs get et set)
 * Le projet �tant construit avec les annotations Symfony, tous les renseignements n�cesaires � Symfony pour que l'applis fonctionne se trouvent en en-t�te de la classe, des variables et des m�thodes pr�fix�s de @
 * (= caract�ristiques et contraintes des champs (nom, type ...), jointures 
 *
 * @ORM\Table(name="activite", indexes={@ORM\Index(name="fki_id_jour", columns={"id_jour"}), @ORM\Index(name="fki_id_territoire", columns={"id_territoire"}), @ORM\Index(name="fki_id_activite_transv", columns={"id_activite_transv"}), @ORM\Index(name="fki_id_agent", columns={"id_agent"}), @ORM\Index(name="fki_id_semaine", columns={"id_semaine"}), @ORM\Index(name="fki_id_action", columns={"id_action"}), @ORM\Index(name="fki_id_duree", columns={"id_duree"}), @ORM\Index(name="fki_id_maitrise", columns={"id_maitrise"}), @ORM\Index(name="IDX_B87555153C7F789E", columns={"id_commune"})})
 * @ORM\Entity(repositoryClass="Pnv\SaisieBundle\Repository\ActiviteRepository")
 */
class Activite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_activite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="activite_id_activite_seq", allocationSize=1, initialValue=1)
     */
    private $idActivite;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer", nullable=true)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=true)
     */
    private $dateModif;

    /**
     * @var \DicoAction
     *
     * @ORM\ManyToOne(targetEntity="DicoAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_action", referencedColumnName="id_action")
     * })
     */
    private $idAction;

    /**
     * @var \DicoActiviteTransv
     *
     * @ORM\ManyToOne(targetEntity="DicoActiviteTransv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_activite_transv", referencedColumnName="id_activite_transv")
     * })
     */
    private $idActiviteTransv;

    /**
     * @var \DicoAgent
     *
     * @ORM\ManyToOne(targetEntity="DicoAgent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_agent", referencedColumnName="id_utilisateur")
     * })
     */
    private $idAgent;

    /**
     * @var \DicoDuree
     *
     * @ORM\ManyToOne(targetEntity="DicoDuree")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_duree", referencedColumnName="id_duree")
     * })
     */
    private $idDuree;

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
     * @var \DicoJour
     *
     * @ORM\ManyToOne(targetEntity="DicoJour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jour", referencedColumnName="id_jour")
     * })
     */
    private $idJour;

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
     * @var \DicoSemaine
     *
     * @ORM\ManyToOne(targetEntity="DicoSemaine")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_semaine", referencedColumnName="id_semaine")
     * })
     */
    private $idSemaine;

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
     * Get idActivite
     *
     * @return integer 
     */
    public function getIdActivite()
    {
        return $this->idActivite;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Activite
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Activite
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Activite
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModif
     *
     * @param \DateTime $dateModif
     * @return Activite
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return \DateTime 
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set idAction
     *
     * @param \Pnv\SaisieBundle\Entity\DicoAction $idAction
     * @return Activite
     */
    public function setIdAction(\Pnv\SaisieBundle\Entity\DicoAction $idAction = null)
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

    /**
     * Set idActiviteTransv
     *
     * @param \Pnv\SaisieBundle\Entity\DicoActiviteTransv $idActiviteTransv
     * @return Activite
     */
    public function setIdActiviteTransv(\Pnv\SaisieBundle\Entity\DicoActiviteTransv $idActiviteTransv = null)
    {
        $this->idActiviteTransv = $idActiviteTransv;

        return $this;
    }

    /**
     * Get idActiviteTransv
     *
     * @return \Pnv\SaisieBundle\Entity\DicoActiviteTransv 
     */
    public function getIdActiviteTransv()
    {
        return $this->idActiviteTransv;
    }

    /**
     * Set idAgent
     *
     * @param \Pnv\SaisieBundle\Entity\DicoAgent $idAgent
     * @return Activite
     */
    public function setIdAgent(\Pnv\SaisieBundle\Entity\DicoAgent $idAgent = null)
    {
        $this->idAgent = $idAgent;

        return $this;
    }

    /**
     * Get idAgent
     *
     * @return \Pnv\SaisieBundle\Entity\DicoAgent 
     */
    public function getIdAgent()
    {
        return $this->idAgent;
    }

    /**
     * Set idDuree
     *
     * @param \Pnv\SaisieBundle\Entity\DicoDuree $idDuree
     * @return Activite
     */
    public function setIdDuree(\Pnv\SaisieBundle\Entity\DicoDuree $idDuree = null)
    {
        $this->idDuree = $idDuree;

        return $this;
    }

    /**
     * Get idDuree
     *
     * @return \Pnv\SaisieBundle\Entity\DicoDuree 
     */
    public function getIdDuree()
    {
        return $this->idDuree;
    }

    /**
     * Set idCommune
     *
     * @param \Pnv\SaisieBundle\Entity\DicoCommune $idCommune
     * @return Activite
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
     * Set idJour
     *
     * @param \Pnv\SaisieBundle\Entity\DicoJour $idJour
     * @return Activite
     */
    public function setIdJour(\Pnv\SaisieBundle\Entity\DicoJour $idJour = null)
    {
        $this->idJour = $idJour;

        return $this;
    }

    /**
     * Get idJour
     *
     * @return \Pnv\SaisieBundle\Entity\DicoJour 
     */
    public function getIdJour()
    {
        return $this->idJour;
    }

    /**
     * Set idMaitrise
     *
     * @param \Pnv\SaisieBundle\Entity\DicoMaitrise $idMaitrise
     * @return Activite
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
     * Set idSemaine
     *
     * @param \Pnv\SaisieBundle\Entity\DicoSemaine $idSemaine
     * @return Activite
     */
    public function setIdSemaine(\Pnv\SaisieBundle\Entity\DicoSemaine $idSemaine = null)
    {
        $this->idSemaine = $idSemaine;

        return $this;
    }

    /**
     * Get idSemaine
     *
     * @return \Pnv\SaisieBundle\Entity\DicoSemaine 
     */
    public function getIdSemaine()
    {
        return $this->idSemaine;
    }

    /**
     * Set idTerritoire
     *
     * @param \Pnv\SaisieBundle\Entity\DicoTerritoire $idTerritoire
     * @return Activite
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

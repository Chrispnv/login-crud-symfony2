<?php

namespace Pnv\SaisieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// use rajouté pour l'authentification
//use Symfony\Component\Security\Core\User\UserInterface;

/**
 * DicoAgent
 *
 * @ORM\Table(name="dico_agent", indexes={@ORM\Index(name="fki_id_service", columns={"id_service"})})
 * @ORM\Entity
 */
class DicoAgent //implements UserInterface // implements UserInterface rajouté pour l'authentification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dico_agent_id_utilisateur_seq", allocationSize=1, initialValue=1)
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="login_agent", type="string", length=50, nullable=true)
     */
    private $loginAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_agent", type="string", length=10, nullable=true)
     */
    private $mdpAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_agent", type="string", length=50, nullable=true)
     */
    private $nomAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_agent", type="string", length=50, nullable=true)
     */
    private $prenomAgent;

    /**
     * @var \DicoService
     *
     * @ORM\ManyToOne(targetEntity="DicoService")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_service", referencedColumnName="id_service")
     * })
     */
    private $idService;



    /**
     * Get idUtilisateur
     *
     * @return integer 
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set loginAgent
     *
     * @param string $loginAgent
     * @return DicoAgent
     */
    public function setLoginAgent($loginAgent)
    {
        $this->loginAgent = $loginAgent;

        return $this;
    }

    /**
     * Get loginAgent
     *
     * @return string 
     */
    public function getLoginAgent()
    {
        return $this->loginAgent;
    }

    /**
     * Set mdpAgent
     *
     * @param string $mdpAgent
     * @return DicoAgent
     */
    public function setMdpAgent($mdpAgent)
    {
        $this->mdpAgent = $mdpAgent;

        return $this;
    }

    /**
     * Get mdpAgent
     *
     * @return string 
     */
    public function getMdpAgent()
    {
        return $this->mdpAgent;
    }

    /**
     * Set nomAgent
     *
     * @param string $nomAgent
     * @return DicoAgent
     */
    public function setNomAgent($nomAgent)
    {
        $this->nomAgent = $nomAgent;

        return $this;
    }

    /**
     * Get nomAgent
     *
     * @return string 
     */
    public function getNomAgent()
    {
        return $this->nomAgent;
    }

    /**
     * Set prenomAgent
     *
     * @param string $prenomAgent
     * @return DicoAgent
     */
    public function setPrenomAgent($prenomAgent)
    {
        $this->prenomAgent = $prenomAgent;

        return $this;
    }

    /**
     * Get prenomAgent
     *
     * @return string 
     */
    public function getPrenomAgent()
    {
        return $this->prenomAgent;
    }

    /**
     * Set idService
     *
     * @param \Pnv\SaisieBundle\Entity\DicoService $idService
     * @return DicoAgent
     */
    public function setIdService(\Pnv\SaisieBundle\Entity\DicoService $idService = null)
    {
        $this->idService = $idService;

        return $this;
    }

    /**
     * Get idService
     *
     * @return \Pnv\SaisieBundle\Entity\DicoService 
     */
    public function getIdService()
    {
        return $this->idService;
    }
	
	// Méthodes ci-dessous ajoutées pour l'authentification
	/*public function getRoles()
	{
		return array('ROLE_ADMIN');
	}
	
	public function getSalt()
	{
		return null;
	}
	
	public function eraseCredentials()
	{
	}
	
	public function equals(UserInterface $user)
	{
		return $user->getLoginAgent() == $this->getLoginAgent();
	}*/
}

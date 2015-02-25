<?php

namespace Pnv\SaisieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * ActiviteType
 *
 * Classe basée sur une entité (ici Activite). Elle contient des méthodes factorisées pour la construction des formulaires
 */
class ActiviteType extends AbstractType
{
	// instanciation des champs souhaités dans le formulaire
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('idAction')
			->add('idMaitrise')
			->add('idTerritoire')
			->add('idCommune')
			->add('idDuree')
            ->add('commentaire');
    }

	// permet de spécifier à travers la clé data_class quelle est l'entité ou la classe lié au formulaire
    /*public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Pnv\SaisieBundle\Entity\Activite',
        );
    }*/

	// permet de donner un nom unique au formulaire. C'est le nom qui sera utilisé comme préfix dans le nom des inputs en html
    public function getName()
    {
        return 'Activite';
    }
}
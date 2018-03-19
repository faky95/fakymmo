<?php

namespace FK\ImmoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class BienType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombien')
        ->add('description')
        ->add('etat')
        ->add('prixlocation')
        ->add('idParentBien')
        ->add('localite')
        ->add('typebien')
        // ->add('images', FileType::class,array("label"=>'Image(JPG)') )
        ->add('save', SubmitType::class,array("label"=>'Enregister') );
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FK\ImmoBundle\Entity\Bien'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fk_immobundle_bien';
    }


}

<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrdenReconexionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('fecha')
            ->add('valor')
            //->add('activo')
            ->add('afiliacion')
            ->add('tecnico')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\OrdenReconexion'
        ));
    }

    public function getName()
    {
        return 'app_adminbundle_ordenreconexiontype';
    }
}

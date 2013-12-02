<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CajaMenorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('concepto')
            ->add('valor')
            ->add('nombre')
            ->add('identificacion')
            ->add('telefono')
            ->add('fecha')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\CajaMenor'
        ));
    }

    public function getName()
    {
        return 'app_adminbundle_cajamenortype';
    }
}

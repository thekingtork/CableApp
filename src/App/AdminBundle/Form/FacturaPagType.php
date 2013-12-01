<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FacturaPagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nroFactura')
            ->add('diasfacturados')
            ->add('fechaExp')
            ->add('fechaCorte')
            ->add('pago')
            ->add('afiliacion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Factura'
        ));
    }

    public function getName()
    {
        return 'app_adminbundle_facturapagtype';
    }
}

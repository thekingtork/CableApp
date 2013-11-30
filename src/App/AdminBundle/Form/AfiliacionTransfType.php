<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AfiliacionTransfType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoDocumento')
            ->add('documento')
            ->add('rsocial')
            ->add('nombres')
            ->add('apellidos')
            ->add('ncontrato')
            ->add('fechaInstalacion')
            ->add('tipoTelefono')
            ->add('telefono')
            ->add('correo')
            ->add('direccion')
            ->add('valorInscripcion')
            ->add('ncuotas')
            ->add('cuota1')
            ->add('cuota2')
            ->add('cuota3')
            ->add('cuotaMes')
            ->add('activo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\Afiliacion'
        ));
    }

    public function getName()
    {
        return 'app_adminbundle_afiliacion2type';
    }
}

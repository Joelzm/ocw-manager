<?php

namespace OCWm\OCWBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('pNombre')
            ->add('sNombre')
            ->add('pApellido')
            ->add('sApellido')
            ->add('username')
            ->add('password')
            //->add('salt')
            ->add('user_roles')
            ->add('sexo')
        ;
    }

    public function getName()
    {
        return 'ocwm_ocwbundle_usertype';
    }
}

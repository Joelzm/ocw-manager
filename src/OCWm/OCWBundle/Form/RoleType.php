<?php

namespace OCWm\OCWBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
        ;
    }

    public function getName()
    {
        return 'ocwm_ocwbundle_roletype';
    }
}

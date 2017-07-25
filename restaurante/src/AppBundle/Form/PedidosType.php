<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PedidosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', EntityType::class, array(
            'class' => 'AppBundle:Cliente',
            'choice_label' => 'nombre',
            'placeholder' => 'Seleccione un cliente'
        ))
            ->add('plato', EntityType::class, array(
                'class' => 'AppBundle:Platos',
                'choice_label' => 'nombre',
                'placeholder' => 'Seleccione un plato'
            ))
            ->add('cantidad');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Pedidos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_pedidos';
    }
}

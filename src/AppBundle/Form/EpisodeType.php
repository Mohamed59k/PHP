<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/28
 * Time: ÏÂÎç3:50
 */

namespace AppBundle\Form;

use AppBundle\Entity\Episode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name', TextType::class)
            ->add('episodeNumber', IntegerType::class)
            ->add('description', TextType::class)
            ->add('image', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Episode::class,
        ));
    }

}
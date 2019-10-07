<?php

namespace App\Form;

use App\Entity\Bien;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use App\Entity\Type;



class BienFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nb_piece',NumberType::class, array('label' => 'Nombre de pièce(s) :','attr'=>array('class'=>'form-control','placeholder'=>'')))
            ->add('nb_chambre',NumberType::class, array('label' => 'Nombre de chambre(s) :','attr'=>array('class'=>'form-control','placeholder'=>'')))
            ->add('superficie',NumberType::class, array('label' => 'Surface :','attr'=>array('class'=>'form-control','placeholder'=>'')))
            ->add('prix',NumberType::class, array('label' => 'Prix :','attr'=>
                array('class'=>'form-control','placeholder'=>'')))
            ->add('chauffage',TextType::class, array('label' => 'Type de chauffage :','attr'=>
                array('class'=>'form-control','placeholder'=>'')))
            ->add('annee',NumberType::class, array('label' => 'Annee :','attr'=>
                array('class'=>'form-control','placeholder'=>'')))
            ->add('localisation',TextType::class, array('label' => 'Localisation :','attr'=>
                array('class'=>'form-control','placeholder'=>'')))
            ->add('etat',TextType::class, array('label' => 'État :','attr'=>
                array('class'=>'form-control','placeholder'=>'')))
            ->add('id_type',EntityType::class, array('class' => Type::class,'choice_label'=>'libelle'))
            ->add('valider',SubmitType::class, array('label'=>'Valider','attr'=>
                array('class'=>'btn btn-primary btn-block')))
            ->add('annuler',ResetType::class, array('label'=>'Annuler','attr'=>
                array('class'=>'btn btn-primary btn-block')))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bien::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskForm extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options): void{
        $builder    
            ->add('title', TextType::class,['label'=> 'Titulo da Tarefa',])
            ->add('description', TextareaType::class,['label'=> 'Descrição', 'required' => false])           //se o campo nao for obrigatório
            ->add('isCompleted', CheckboxType::class,['label'=> 'Tarefa Concluida?', 'required' => false,]);  //se o checkbox nao for
    }

    public function configureOptions(OptionsResolver $resolver): void{
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }

    public function getBlockPrefix(): string{
        return 'task_form'; // Ou 'task' se preferir, mas 'task_form' é mais descritivo para um Form Type
    }
}

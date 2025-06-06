<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskForm;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TaskController extends AbstractController{

    #[Route('/task', name: 'app_task_index')]
    public function index(TaskRepository $taskRepository): Response{
        $tasks = $taskRepository->findAll();
        return $this->render('task/index.html.twig',[
            'tasks' => $tasks,
        ]);
    }

    #[Route('/task/new', name:'app_task_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response{
        $task = new Task();    //nova instancia da tarefa
        $task->setCreatedAt(new \DateTimeImmutable());
        
        $form = $this->createForm(TaskForm::class, $task);   //form ligado a tarefa
        $form->handleRequest($request);   //requisição

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();

            $this->addFlash('success','Tarefa criada com sucesso!');
            return $this->redirectToRoute('app_task_index');
        }

        return $this->render('task/new.html.twig', [
            'taskForm' => $form->createView(),
        ]);
    }

    #[Route('/task/{id}edit', name:'app_task_edit')]
    public function edit(Request $request, Task $task, EntityManagerInterface $entityManager): Response{
        $form = $this->createForm(TaskForm::class, $task);   //form ligado a tarefa
        $form->handleRequest($request);   //requisição

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success','Tarefa editada com sucesso!');
            return $this->redirectToRoute('app_task_index');
        }

        //template com form pré=renderizaod
        return $this->render('task/edit.html.twig', [
            'taskForm' => $form->createView(),
            'task' => $task,
        ]);
    }

    #[Route('/task/{id}delete', name:'app_task_delete', methods: ['POST'])]
    public function delete(Request $request, Task $task, EntityManagerInterface $entityManager): Response{
        if( $this->isCsrfTokenValid('delete' . $task->getId(), $request->request->get('_token')) ){
            $entityManager->remove($task);
            $entityManager->flush();
            
            $this->addFlash('success','Tarefa removida com sucesso!');
        } else{
            $this->addFlash('error','Erro de segurança: Token CSRF inválido.');
        }
        
        return $this->redirectToRoute('app_task_index');
    }
}

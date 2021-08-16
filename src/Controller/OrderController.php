<?php

namespace App\Controller;

use App\Entity\ToDoList;
use App\Form\ToDoListType;
use App\Repository\ToDoListRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    private $toDoListRepository;

    public function __construct(ToDoListRepository $toDoListRepository)
    {
        $this->toDoListRepository = $toDoListRepository;
    }

    /**
     * @Route("/orderByIdAsc", name="order_by_id_asc")
     */
    public function orderByIdAsc(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['id' => 'asc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByIdDesc", name="order_by_id_desc")
     */
    public function orderByIdDesc(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['id' => 'desc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByLibelleAsc", name="order_by_libelle_asc")
     */
    public function orderByLibelleAsc(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['libelle' => 'asc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByLibelleDesc", name="order_by_libelle_desc")
     */
    public function orderByLibelleDesc(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['libelle' => 'desc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByTaskDone", name="order_by_task_done")
     */
    public function orderByTaskDone(): Response
    {
        $toDoList = $this->toDoListRepository->findBy(['isDone' => true]);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByTaskToDo", name="order_by_task_to_do")
     */
    public function orderByTaskToDo(): Response
    {
        $toDoList = $this->toDoListRepository->findBy(['isDone' => false]);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByRecentTask", name="order_by_recent_task")
     */
    public function orderByTaskRecent(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['createdAt' => 'desc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }

    /**
     * @Route("/orderByOldTask", name="order_by_old_task")
     */
    public function orderByOldTask(): Response
    {
        $toDoList = $this->toDoListRepository->findBy([], ['createdAt' => 'asc']);

        return $this->render('to_do_list/index.html.twig', [
            'website' => 'To Do List',
            'to_do_list' => $toDoList,
        ]);
    }
}
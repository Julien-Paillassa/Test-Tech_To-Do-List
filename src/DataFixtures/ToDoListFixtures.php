<?php

namespace App\DataFixtures;

use App\Entity\ToDoList;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ToDoListFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $toDo = new ToDoList();
        $toDo->setLibelle("Faire les courses");
        $toDo->setIsDone(true);
        $manager->persist($toDo);
        $manager->flush();

        $toDo = new ToDoList();
        $toDo->setLibelle("Imprimer mon document");
        $toDo->setIsDone(false);
        $manager->persist($toDo);
        $manager->flush();

        $toDo = new ToDoList();
        $toDo->setLibelle("Mettre ma voiture au garage");
        $toDo->setIsDone(true);
        $manager->persist($toDo);
        $manager->flush();
    }
}
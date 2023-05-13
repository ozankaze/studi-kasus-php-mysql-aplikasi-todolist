<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Database");
    $todolistService->addTodolist("Belajar MySQL");
    $todolistService->addTodolist("Belajar Laravel");

    $todolistService->showTodolist();
    
}

function testAddTodolist(): void
{

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar Database");
    $todolistService->addTodolist("Belajar MySQL");
    $todolistService->addTodolist("Belajar Laravel");

    // $todolistService->showTodolist();
    
}

function testRemoveTodoList(): void
{

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->removeTodolist(4) . PHP_EOL;
    $todolistService->removeTodolist(3) . PHP_EOL;
    $todolistService->removeTodolist(2) . PHP_EOL;
    $todolistService->removeTodolist(1) . PHP_EOL;

}

testShowTodolist();
// testAddTodolist();
// testRemoveTodoList();
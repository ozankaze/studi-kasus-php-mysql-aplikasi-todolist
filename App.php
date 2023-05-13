<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

require __DIR__ . "/Entity/Todolist.php";
require __DIR__ . "/Helper/InputHelper.php";
require __DIR__ . "/Repository/TodolistRepository.php";
require __DIR__ . "/Service/TodolistService.php";
require __DIR__ . "/View/TodolistView.php";
require __DIR__ . "/Config/Database.php";

echo "Aplikasi Todolist" . PHP_EOL;

$connection = \Config\Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();
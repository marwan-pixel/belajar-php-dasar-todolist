<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Belajar");

var_dump($todoList);

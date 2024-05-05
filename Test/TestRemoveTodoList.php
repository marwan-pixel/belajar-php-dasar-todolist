<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Main Mobile Legends");
var_dump($todoList);

removeTodoList(2);
var_dump($todoList);

removeTodoList(4);
var_dump($todoList);

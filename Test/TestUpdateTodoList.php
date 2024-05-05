<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/UpdateTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Belajar");

var_dump($todoList);

updateTodoList(1, "Tidur");

var_dump($todoList);

updateTodoList(2, "Bermain Bola");
var_dump($todoList);

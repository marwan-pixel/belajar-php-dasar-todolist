<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

showTodoList();

addTodoList("Tidur");
addTodoList("Menyiram bunga");
addTodoList("Jogging");

showTodoList();

removeTodoList(1);

showTodoList();

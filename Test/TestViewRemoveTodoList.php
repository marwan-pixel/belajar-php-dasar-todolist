<?php

require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

addTodoList("Tidur");
addTodoList("Menyiram bunga");
addTodoList("Jogging");

showTodoList();

viewRemoveTodoList();

showTodoList();

viewRemoveTodoList();

showTodoList();

<?php

require_once __DIR__ . "/../View/ViewUpdateTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Tidur");
addTodoList("Menyiram bunga");
addTodoList("Jogging");

showTodoList();

viewUpdateTodoList();

showTodoList();

viewUpdateTodoList();

showTodoList();

<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar Javascript");
addTodoList("Belajar MySQL");

viewShowTodoList();

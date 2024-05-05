<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/UpdateTodoList.php";

function viewUpdateTodoList(): void
{
    echo "Memperbarui Todo" . PHP_EOL;

    $index_input = input("Nomor ke berapakah yang ingin diperbarui? (ketik 'x' untuk membatalkan)");
    $todo_input = input("Apa isi Todo yang ingin diperbarui? (ketik 'x' untuk membatalkan)");

    if ($index_input === 'x' || $todo_input === 'x') {
        echo "Batal memperbarui Todo" . PHP_EOL;
    } else {
        updateTodoList($index_input, $todo_input);
    }
}

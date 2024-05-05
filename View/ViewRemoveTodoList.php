<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList(): void
{
    echo "Menghapus Todo" . PHP_EOL;

    $todo = input("Pilih nomor todo yang ingin dihapus (ketik 'x' untuk membatalkan)");

    if ($todo === 'x') {
        echo "Batal Menghapus Todo" . PHP_EOL;
    } else {
        removeTodoList($todo);
    }
}

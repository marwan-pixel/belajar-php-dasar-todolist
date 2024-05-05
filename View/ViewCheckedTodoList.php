<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/CheckedTodoList.php";

function viewCheckedTodoList(): void
{
    echo "Menandai Todo" . PHP_EOL;

    $todo = input("Pilih nomor todo yang ingin ditandai jika sudah dilaksanakan (ketik 'x' untuk membatalkan)");

    if ($todo === 'x') {
        echo "Batal Menghapus Todo" . PHP_EOL;
    } else {
        checkedTodoList($todo);
    }
}

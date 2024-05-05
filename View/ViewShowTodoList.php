<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewCheckedTodoList.php";
require_once __DIR__ . "/../View/ViewUpdateTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Aktivitas" . PHP_EOL;
        echo "2. Hapus Aktivitas" . PHP_EOL;
        echo "3. Perbarui Aktivitas" . PHP_EOL;
        echo "4. Tandai Aktivitas" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan === "1") {
            viewAddTodoList();
        } else if ($pilihan === "2") {
            viewRemoveTodoList();
        } else if ($pilihan === "3") {
            viewUpdateTodoList();
        } else if ($pilihan === "4") {
            viewCheckedTodoList();
        } else if ($pilihan === "x") {
            break;
        } else {
            echo "Input tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi!" . PHP_EOL;
}

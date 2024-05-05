<?php

/**
 * Menampilkan todo di list
 */

function showTodoList(): void
{
    global $todoList;

    echo "TodoList: " . PHP_EOL;

    foreach ($todoList as $row => $value) {
        echo "$row. $value" . PHP_EOL;
    }
}

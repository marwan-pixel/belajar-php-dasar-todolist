<?php

/**
 * Mengubah atau memperbarui Todo di list
 */

function updateTodoList(int $index, string $todo): bool
{
    global $todoList;
    if ($index > sizeof($todoList)) {
        return false;
    }

    $todoList[$index] = $todo;

    return true;
}

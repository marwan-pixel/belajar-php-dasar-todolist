<?php

/**
 * Menghapus Todo dari list
 */

function removeTodoList(int $index): bool
{
    global $todoList;

    if ($index > sizeof($todoList)) {
        return false;
    }

    for ($i = $index; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}

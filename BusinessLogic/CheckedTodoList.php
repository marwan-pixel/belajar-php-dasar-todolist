<?php

/**
 * Memberikan tanda cek pada todo jika todo sudah dilaksanakan
 */

function checkedTodoList(int $index): bool
{
    global $todoList;

    if ($index > sizeof($todoList)) {
        return false;
    }

    $todoList[$index] .= " Checked";

    return true;
}

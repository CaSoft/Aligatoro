<?php

/**
 * Alguns helpers para números
 */

function is_an_integer($numero) {
    if (is_numeric($numero)) {
        if ((int)$numero == $numero) {
            return TRUE;
        }
    }
    return FALSE;
}
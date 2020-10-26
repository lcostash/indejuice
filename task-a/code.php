<?php

/*
 *  Function    : containsWord()
 *
 *  Description : Checks whether a sentence contains a specific word, case insensitive.
 *
 *  Parameters  : (string) word         - The word to find
 *                (string) sentence     - The sentence to search
 *
 *  Return      : boolean
 *
 *  Example     : See run.php for input/output examples
 *
 *  Test        : Execute run.php to test your implementation.
 *                (In console, simply run the command 'php run.php')
 *
 */


/**
 * Checks whether a sentence contains a specific word, case insensitive.
 * @param string $word - The word to find
 * @param string $sentence - The sentence to search
 * @return bool
 */
function containsWord($word, $sentence): bool
{
    $result = false;
    $items = explode(' ', str_replace('.', '', $sentence));

    foreach ($items as $item) {
        if (strcasecmp($word, $item) === 0) {
            $result = true;
            break;
        }
    }

    return $result;
}

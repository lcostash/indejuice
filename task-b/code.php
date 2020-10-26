<?php

/*
 *  Function    : generateSentence()
 *
 *  Description : Generate a sentence listing out all items provided in an array.
 *
 *  Parameters  : (string)               start         - The start of the sentence
 *                (array[string])        items         - The list of items
 *                (string/array[string]) append        - (optional) item types to be appended to each item
 *
 *  Return      : string
 *
 *  Example     : See run.php for input/output examples
 *
 *  Test        : Execute run.php to test your implementation.
 *                (In console, simply run the command 'php run.php')
 *
 */

/**
 * Generate a sentence listing out all items provided in an array.
 * @param string $start - The start of the sentence
 * @param array $items - The list of items
 * @param string|array $append - (optional) item types to be appended to each item
 * @return string
 */
function generateSentence(string $start, array $items, $append = null): string
{
    $result = "$start: ";

    if (is_array($items) && count($items) !== 0) {
        if (!is_null($append)) {

            if (is_string($append)) {
                foreach ($items as $index => $item) {
                    $items[$index] = sprintf(
                        '%s %s',
                        $item,
                        $append
                    );
                }
            }

            if (is_array($append) && count($append) !== 0) {
                foreach ($items as $index => $item) {
                    $items[$index] = sprintf(
                        '%s %s',
                        $item,
                        (isset($append[$index]) ? $append[$index] : '')
                    );
                }
            }

        }

        $result .= prepareText($items);
    }

    return $result;
}

/**
 * @param array $items - The list of items
 * @return string
 */
function prepareText(array $items): string
{
    $result = '';

    if (is_array($items) && count($items) !== 0) {
        $text = implode(', ', $items);
        $pos = strrpos($text, ',', 0);
        $result = sprintf(
            '%s and %s.',
            trim(substr($text, 0, $pos)),
            trim(substr($text, $pos + 1, strlen($text)))
        );
    }

    return $result;
}
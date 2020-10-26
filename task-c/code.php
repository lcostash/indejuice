<?php

/*
 *  Class       : Counter
 *
 *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
 *
 *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
 *
 *  Variables   : (private:int) count   - The count value
 *
 *  Functions
 *
 *      Function        : (public) count()
 *
 *          Description : Increment the count value
 *
 *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
 *
 *          Return      : NULL
 *
 *      Function        : (public) get()
 *
 *          Description : Return the current count value
 *
 *          Parameters  : [NONE]
 *
 *          Return      : int
 *
 *      Function        : (public) reset()
 *
 *          Description : Reset the count value to 0
 *
 *          Parameters  : [NONE]
 *
 *          Return      : NULL
 *
 *  Example     : See run.php for input/output examples
 *
 *  Test        : Execute run.php to test your implementation.
 *
 */


class Counter
{
    /**
     * @var int
     */
    private $count;

    /**
     * Counter constructor.
     * @param int $count - (optional) The starting count value [default: 0]
     */
    public function __construct(int $count = 0)
    {
        $this->count = $count;
    }

    /**
     * Increment the count value
     * @param int $n - (optional) The value to increase the count by [default: 1]
     * @return null
     */
    public function count(int $n = 1)
    {
        if (is_int($n)) {
            $this->count += $n;
        }

        return null;
    }

    /**
     * Return the current count value
     * @return int
     */
    public function get(): int
    {
        return $this->count;
    }

    /**
     * Reset the count value to 0
     * @return null
     */
    public function reset()
    {
        $this->count = 0;

        return null;
    }
}
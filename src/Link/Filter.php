<?php

namespace Cocur\Chain\Link;

use Cocur\Chain\Chain;

/**
 * Filter.
 *
 * @author    Florian Eckerstorfer
 * @copyright 2015-2018 Florian Eckerstorfer
 */
trait Filter
{
    /**
     * Filters elements of an array using a callback function.
     *
     * Iterates over each value in the array passing them to the `callback` function. If the callback functions returns
     * true the current value from the array stays in the array, otherwise they are removed. Array keys are preserved.
     *
     * @param callable $callback The callback function to use.
     *
     * @return Chain
     */
    public function filter(callable $callback)
    {
        $this->array = array_filter($this->array, $callback, ARRAY_FILTER_USE_BOTH);

        return $this;
    }
}

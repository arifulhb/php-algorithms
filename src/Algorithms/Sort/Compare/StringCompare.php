<?php

namespace Arifulhb\Algorithms\Sort\Compare;

/**
 * Class StringCompare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
class StringCompare extends Compare implements
    ICompare
{
    /**
     * @param  array  $a
     * @param $b
     * @return int
     */
    public function compare(array $a, $b): int
    {
        return $this->performStringCompare(
            $a[$this->config->stringField],
            $b[$this->config->stringField],
        );
    }
}

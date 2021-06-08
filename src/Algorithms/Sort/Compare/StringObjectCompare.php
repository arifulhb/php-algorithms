<?php

namespace Arifulhb\Algorithms\Sort\Compare;

/**
 * Class StringObjectCompare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
class StringObjectCompare extends Compare
{
    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function compare($a, $b): int
    {
        return $this->performStringCompare(
            $a->{$this->config->stringField},
            $b->{$this->config->stringField},
        );
    }
}

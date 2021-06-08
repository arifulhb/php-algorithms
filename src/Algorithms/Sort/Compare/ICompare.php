<?php


namespace Arifulhb\Algorithms\Sort\Compare;

/**
 * Interface ICompare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
interface ICompare
{
    /**
     * @param  array  $a
     * @param $b
     * @return mixed
     */
    public function compare(array $a, $b);
}

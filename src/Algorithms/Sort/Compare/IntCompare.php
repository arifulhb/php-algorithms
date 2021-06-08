<?php


namespace Arifulhb\Algorithms\Sort\Compare;


use Arifulhb\Algorithms\Sort\SortConfiguration;

/**
 * Class IntCompare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
class IntCompare extends Compare implements
    ICompare
{

    /**
     * @param  array $a
     * @param $b
     * @return bool
     */
    public function compare(array $a, $b): bool
    {
        $sortAsc = $this->config->sortType === SortConfiguration::$SORT_TYPE_ASCENDING;

        return $this->performIntCompare(
            $a[$this->config->integerField],
            $b[$this->config->integerField],
            $sortAsc
        );
    }
}

<?php


namespace Arifulhb\Algorithms\Sort\Compare;


use Arifulhb\Algorithms\Sort\SortConfiguration;

/**
 * Class IntObjectCompare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
class IntObjectCompare extends Compare
{

    /**
     * @param  $a
     * @param $b
     * @return bool
     */
    public function compare($a, $b): bool
    {
        $sortAsc = $this->config->sortType === SortConfiguration::$SORT_TYPE_ASCENDING;

        return $this->performIntCompare(
            $a->{$this->config->integerField},
            $b->{$this->config->integerField},
            $sortAsc
        );
    }
}

<?php

namespace Arifulhb\Algorithms\Sort;


use Arifulhb\Algorithms\Sort\Compare\IntCompare;
use Arifulhb\Algorithms\Sort\Compare\StringCompare;

/**
 * Class SortArray
 * @package Arifulhb\Algorithms\Sort
 */
class SortArray implements ISort
{
    protected $config;

    /**
     * Sort constructor.
     * @param  SortConfiguration  $config
     */
    public function __construct(SortConfiguration $config)
    {
        $this->config = $config;
    }

    /**
     * @param  array  $data
     * @return array|null
     */
    public function sort(array $data): ?array
    {
        if ($this->config->sortByStringField === true) {
            usort($data, [new StringCompare($this->config), "compare"]);
            usort($data, [new IntCompare($this->config), "compare"]);
        } else {
            usort($data, [new IntCompare($this->config), "compare"]);
            usort($data, [new StringCompare($this->config), "compare"]);
        }

        return $data;
    }
}

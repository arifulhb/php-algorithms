<?php

namespace Arifulhb\Algorithms\Sort;


use Arifulhb\Algorithms\Sort\Compare\IntObjectCompare;
use Arifulhb\Algorithms\Sort\Compare\StringObjectCompare;

/**
 * Class SortObject
 *
 * @package Arifulhb\Algorithms\Sort
 */
class SortObject implements ISort
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
            usort($data, [new StringObjectCompare($this->config), "compare"]);
            usort($data, [new IntObjectCompare($this->config), "compare"]);
        } else {
            usort($data, [new IntObjectCompare($this->config), "compare"]);
            usort($data, [new StringObjectCompare($this->config), "compare"]);
        }

        return $data;
    }
}

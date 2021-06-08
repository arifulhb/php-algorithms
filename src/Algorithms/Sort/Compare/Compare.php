<?php


namespace Arifulhb\Algorithms\Sort\Compare;

use Arifulhb\Algorithms\Sort\SortConfiguration;

/**
 * Class Compare
 * @package Arifulhb\Algorithms\Sort\Compare
 */
abstract class Compare
{

    /**
     * @var
     */
    protected $config;

    /**
     * Compare constructor.
     * @param  SortConfiguration  $config
     */
    public function __construct(SortConfiguration $config)
    {
        $this->config = $config;
    }

    /**
     * @param  string  $fieldA
     * @param  string  $fieldB
     * @return int
     */
    protected function performStringCompare(string $fieldA, string $fieldB): int
    {
        if (($cmp = strcmp(
            $fieldA,
            $fieldB,
        )) !== 0 ) {
            return $cmp;
        }

        return 0;
    }

    /**
     * @param  int  $fieldA
     * @param  int  $fieldB
     * @param  bool  $sortAsc
     *
     * @return int
     */
    protected function performIntCompare(int $fieldA, int $fieldB, bool $sortAsc = true): int
    {
        if ($sortAsc) {
            return $fieldA > $fieldB;
        }

        return $fieldA < $fieldB;
    }
}

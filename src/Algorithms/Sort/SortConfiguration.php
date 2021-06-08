<?php


namespace Arifulhb\Algorithms\Sort;

/**
 * Class SortConfiguration
 * @package Arifulhb\Algorithms\Sort
 */
class SortConfiguration
{
    public static $SORT_TYPE_ASCENDING = 'asc';
    public static $FIRST_SORT_STRING = true;
    public $integerField;
    public $stringField;
    public $sortType;
    public $sortByStringField; // string / int

    /**
     * SortConfiguration constructor.
     * @param  string  $integerField
     * @param  string  $stringField
     */
    public function __construct(string $integerField, string $stringField)
    {
        $this->integerField = $integerField;
        $this->stringField = $stringField;
        $this->sortType = self::$SORT_TYPE_ASCENDING;
        $this->sortByStringField = self::$FIRST_SORT_STRING;
    }

    /**
     * @param  string  $type
     * @return string
     */
    public function setSortType(string $type)
    {
        return $this->sortType =  $type;
    }
}

<?php


namespace Arifulhb\Algorithms\Tests;

/**
 * Class Product
 * For test purpose
 *
 * @package Arifulhb\Algorithms\Tests
 */
class Product
{
    public $price;
    public $name;

    /**
     * Product constructor.
     * @param  string  $name
     * @param  int  $price
     */
    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

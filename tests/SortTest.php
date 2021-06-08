<?php

namespace Arifulhb\Algorithms\Tests;

use Arifulhb\Algorithms\Sort\SortArray;
use Arifulhb\Algorithms\Sort\SortObject;
use Arifulhb\Algorithms\Sort\SortConfiguration;
use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{
    private static $products;
    private static $arrayOfObjects;

    public static function setUpBeforeClass(): void
    {
        self::$products = [
            [
                'name' => 'tv',
                'price' => 9,
            ],
            [
                'name' => 'apple',
                'price' => 1,
            ],
            [
                'name' => 'airpod',
                'price' => 1,
            ],
            [
                'name' => 'airtag',
                'price' => 3,
            ],
            [
                'name' => 'shampoo',
                'price' => 5,
            ],
            [
                'name' => 'computer',
                'price' => 4,
            ]
        ];

        self::$arrayOfObjects = [
            new Product('tv', 9),
            new Product('apple', 1),
            new Product('airpod', 1),
            new Product('airtag', 3),
            new Product('shampoo', 5),
            new Product('computer', 4),
        ];
    }


    public function testSort(): void
    {
        $config = new SortConfiguration('price','name' );
        $sort = new SortArray($config);

        $result = $sort->sort(self::$products);

        $this->assertIsArray($result);
        $this->assertEquals($result[0], [
            'name' => 'airpod',
            'price' => 1
        ]);
    }

    public function testSortObject(): void
    {
        $config = new SortConfiguration('price','name' );
        $sort = new SortObject($config);

        $result = $sort->sort(self::$arrayOfObjects);

        $airPod = new Product('airpod', 1);

        $this->assertIsArray($result);
        $this->assertEquals($result[0], $airPod);
    }

}


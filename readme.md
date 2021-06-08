# Multi-dimensional Array & Object Sorting in PHP
Sort a multidimensional `array` or `object` by `String` or `integer` or both types. 

## Sort by Array
For example, if you have an array, and you want to sort by name or by price or both,
you can use this package to sort.

```
 $items = [
    [
        'name' => 'computer',
        'price' => 4,
    ],
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
    ]
];
```

### How to
```
// create a configuration object specifying integer and string field accordingly.
$config = new SortConfiguration('price', 'name');

// create sort object with the configuration
$sortArray = new SortArray($config);

// sort the array
$result = $sortArray->sort($products);
```

## Sort by Object
Same as sort by array, but here you may have an array of object to sort. For example,

```
$arrayOfObjects = [
    new Product('computer', 4),
    new Product('tv', 9),
    new Product('apple', 1),
    new Product('airpod', 1),
    new Product('airtag', 3),
    new Product('shampoo', 5)
];
```

### How to
```
// create a configuration object specifying integer and string field accordingly.
$config = new SortConfiguration('price', 'name');

// create sort object with the configuration
$sortObject = new SortObject($config);

// sort the array
$result = $sortObject->sort($products);
```

## Development
To run the test cases,
```
composer run-script tests
```

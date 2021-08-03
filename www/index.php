<?php
require_once __DIR__ . '/vendor/autoload.php';

$array = [11,42,16,80,29,21,4,5,1,7,100,88,26];
        $binarySearch = new \App\Algorithm\Sorting\QuickSort();
        $index = $binarySearch->sort($array);
        print_r($index);

<?php

use PHPUnit\Framework\TestCase;
use \App\Algorithm\Searching\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearchFindItem(){
        $array = [1,4,6,8,9,11,14,16,18,22,23,25,26,28,29];
        $binarySearch = new BinarySearch();
        $index = $binarySearch->search($array,6);
        $this->assertEquals($index , 2);
    }
}

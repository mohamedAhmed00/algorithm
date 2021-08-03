<?php

use PHPUnit\Framework\TestCase;
use \App\Algorithm\Searching\BinarySearch;

class LinearSearchTest extends TestCase
{
    public function testLinearSearchFindItem(){
        $array = [1,4,6,8,9,11,14,16,18,22,23,25,26,28,29];
        $linearSearch = new \App\Algorithm\Searching\LinearSearch();
        $index = $linearSearch->search($array,6);
        $this->assertEquals($index , 2);
    }
}

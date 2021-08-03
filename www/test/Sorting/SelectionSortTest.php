<?php

use PHPUnit\Framework\TestCase;
use \App\Algorithm\Sorting\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort(){
        $array = [11,42,16,80,29,21,4,5,1,7,100,88,26];
        $selection_sort = new SelectionSort();
        $array = $selection_sort->sort($array,6);
        $this->assertSame($array , [1,4,5,7,11,16,21,26,29,42,80,88,100]);
    }
}

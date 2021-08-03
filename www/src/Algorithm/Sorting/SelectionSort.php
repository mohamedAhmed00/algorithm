<?php

namespace App\Algorithm\Sorting;

class SelectionSort
{

    public function sort($array){
        $new_array = [];
        foreach($array as $arr)
        {
            $smallest = $this->findSmallest($array = array_values($array));
            $item = $array[$smallest];
            unset($array[$smallest]);
            array_push($new_array,$item);
        }
        return $new_array;
    }

    private function findSmallest($array){
        $smallest = $array[0];
        $smallest_index = 0;
        foreach ($array as $key => $arr){
            if($arr < $smallest)
            {
                $smallest = $arr;
                $smallest_index = $key;
            }
        }
        return $smallest_index;
    }
}
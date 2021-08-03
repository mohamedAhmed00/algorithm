<?php

namespace App\Algorithm\Sorting;

class QuickSort
{

    public function sort($array)
    {
        $less = [];
        $greater = [];
        if (count($array) < 2) {
            return $array;
        } else {
            $pivot = $array[$index = (int) count($array) / 2];
            unset($array[$index]);
            array_values($array);
            foreach ($array as $item){
                if ($item <= $pivot){
                    $less[] = $item;
                } else {
                    $greater[] = $item;
                }
            }
            return array_merge($this->sort($less) , [$pivot] , $this->sort($greater));
        }
    }

}
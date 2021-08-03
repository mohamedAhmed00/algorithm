<?php

namespace App\Algorithm\Searching;

class LinearSearch
{

    public function Search(array $array , $item){
        foreach($array as $key =>  $arr){
            if($item == $arr){
                return $key;
            }
        }
        return null;
    }
}
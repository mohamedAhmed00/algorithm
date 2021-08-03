<?php

namespace App\Algorithm\Searching;

class BinarySearch
{

    public function search(array $array , $item){
        $start = 0;
        $last = count($array) - 1;
        while($start <= $last){
            $med = (int)(($start + $last) / 2);
            $guest = $array[$med];
            if ($guest == $item) {
                return $med;
            }
            else if($guest > $item){
                $last = $med - 1;
            }
            else{
                $start = $med + 1;
            }
        }
        return null;
    }
}
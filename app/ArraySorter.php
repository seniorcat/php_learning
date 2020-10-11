<?php

namespace app;

class ArraySorter
{

    public function insertSort(array $a)
    {
        for ($i = 1; $i < count($a); $i++) {
            $top = $i;
            while ($top > 0 && $a[$top - 1] > $a[$top]) {
                $tmp = $a[$top - 1];
                $a[$top - 1] = $a[$top];
                $a[$top] = $tmp;
                $top -= 1;
            }
        }

        return $a;
    }
}

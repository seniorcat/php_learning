<?php

namespace app;

class ArraySorter
{

    /**
     * Сортировка вставками
     * Функция сортирует массив по возрастанию
     * @param array $a
     * @return array
     */
    public function insertSort(array $a)
    {
        for ($i = 1; $i < count($a); $i++) {
            $top = $i;
            while ($top > 0 && $a[$top - 1] > $a[$top]) {
                $tmp = $a[$top - 1];
                $a[$top - 1] = $a[$top];
                $a[$top] = $tmp;
                $top -= 1;
                unset($tmp);
            }
        }

        return $a;
    }

    /**
     * Сортировка выбором
     * Функция сортирует массив по возрастанию
     * @param array $a
     * @return array
     */
    public function choiceSort(array $a)
    {
        $n = count($a) - 1;
        
        for ($i = 0; $i < $n; $i++) {
            $min = $i;
            for($j=$i+1; $j<count($a); $j++) {
                if ($a[$j]<$a[$min]) {
                    $min = $j;
                }
            }
            $tmp = $a[$min];
            $a[$min] = $a[$i];
            $a[$i] = $tmp;
            unset($tmp);
        }

        return $a;
    }

}

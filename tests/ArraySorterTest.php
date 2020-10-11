<?php 

use PHPUnit\Framework\TestCase;

class ArraySorterTest extends TestCase
{
    public function testInsertSort()
    {
        $arraySort = new app\ArraySorter();
        $this->assertSame([1,2,3,4,5], $arraySort->insertSort([5,3,1,4,2]));
    }

    public function testChoiceSort()
    {
        $arraySort = new app\ArraySorter();
        $this->assertSame([1,2,3,4,5], $arraySort->choiceSort([5,3,1,4,2]));
    }

    public function testBubbleSort()
    {
        $arraySort = new app\ArraySorter();
        $this->assertSame([1,2,3,4,5], $arraySort->bubbleSort([5,3,1,4,2]));
    }
}
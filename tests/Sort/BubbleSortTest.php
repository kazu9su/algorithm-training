<?php

class BubbleSortTest extends PHPUnit_Framework_TestCase
{
    public function test_bubbleSort()
    {
        $n = 100;
        $data = [];
        for ($i = 0; $i < $n; $i++) {
            $data[] = rand();
        }
        $expected = $data;
        sort($expected);

        $t = new \Algo\Sort\BubbleSort();
        $t->run($data);

        $this->assertEquals($expected, $data);

    }
}
<?php

class QuickSortTest extends PHPUnit_Framework_TestCase
{
    public function test_quickSort()
    {
        $n = 100;
        $data = [];
        for ($i = 0; $i < $n; $i++) {
            $data[] = rand();
        }
        $expected = $data;
        sort($expected);

        $t = new \Algo\Sort\QuickSort();
        $t->run(0, $n - 1, $data);

        $this->assertEquals($expected, $data);
    }
}

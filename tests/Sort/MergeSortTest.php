<?php

class MergeSortTest extends PHPUnit_Framework_TestCase
{
    public function test_mergeSort()
    {
        $n = 10;
        $data = [];
        for ($i = 0; $i < $n; $i++) {
            $data[] = rand();
        }
        $expected = $data;
        sort($expected);

        $t = new \Algo\Sort\MergeSort();
        $t->run($n, $data, 0);

        $this->assertEquals($expected, $data);
    }
}

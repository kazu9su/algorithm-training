<?php

require_once '../src/combination.php';

class CombinationTest extends PHPUnit_Framework_TestCase
{
    function test_combine()
    {
        $base = [['a', 'b'], ['1', '2']];
        $this->assertEquals(combine(...$base), [
            ['a', 'b'], ['1', '2'],
        ]);
    }

    function test_combine2()
    {
        $base = [['a', 'b'], ['1', '2']];
        $this->assertEquals(combine2($base), [
            ['a', 'b'], ['1', '2'],
        ]);
    }
}

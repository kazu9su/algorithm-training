<?php
namespace Algo\Sort;

class MergeSort
{
    public function run($n, &$data, $offset)
    {
        if ($n <= 1) {
            return;
        }
        $m = (int) ($n / 2);

        self::run($m, $data, $offset);
        self::run($n - $m, $data, $offset + $m);

        $buffer = [];
        for ($i = 0;  $i < $m; $i++) {
            $buffer[$i] = $data[$offset + $i];
        }

        $j = $m;
        $i = $k = 0;

        while ($i < $m && $j < $n) {
            if ($buffer[$i] <= $data[$offset + $j]) {
                $data[$offset + $k++] = $buffer[$i++];
            } else {
                $data[$offset + $k++] = $data[$offset + $j++];
            }
        }

        while ($i < $m) {
            $data[$offset + $k++] = $buffer[$i++];
        }
    }
}
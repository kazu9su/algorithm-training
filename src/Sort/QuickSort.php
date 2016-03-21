<?php
namespace Algo\Sort;

class QuickSort
{
    public function run($bottom, $top, &$data)
    {
        if ($bottom >= $top) {
            return;
        }

        //先頭の値を適当な値に
        $div = $data[$bottom];

        for ($lower = $bottom, $upper = $top; $lower < $upper;) {
            while ($lower <= $upper && $data[$lower] <= $div) {
                $lower++;
            }
            while ($lower <= $upper && $data[$upper] > $div) {
                $upper--;
            }

            if ($lower < $upper) {
                $temp = $data[$lower];
                $data[$lower] = $data[$upper];
                $data[$upper] = $temp;
            }
        }

        $temp = $data[$bottom];
        $data[$bottom] = $data[$upper];
        $data[$upper] = $temp;

        self::run($bottom, $upper - 1, $data);
        self::run($upper + 1, $top, $data);
    }
}
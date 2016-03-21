<?php
namespace Algo\Sort;

class BubbleSort
{
    public function run(&$data)
    {
        do {
            $flg = 0;

            for ($i = 0; $i < count($data) - 1; $i++) {
                if ($data[$i] > $data[$i + 1]) {
                    $tmp = $data[$i];
                    $data[$i] = $data[$i+1];
                    $data[$i+1] = $tmp;
                    $flg = 1;
                }
            }

        } while ($flg == 1);
    }
}
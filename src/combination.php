<?php
function combine(...$args) {
    $a = array_shift($args);
    $b = array_shift($args);

    $result = array();
    foreach ($a as $val1) {
        foreach ($b as $val2) {
            $result[] = array_merge((array)$val1, (array)$val2);
        }
    }

    if (count($args) > 0) {
        foreach ($args as $arg) {
            $result = combine($result, $arg);
        }
    }

    return $result;
}

$base = [[1, 2], [3, 4], [5, 6]];
var_export(combine(...$base));

function combine2($elements, $result=[]) {
    if (empty($result)) {
        $a = array_shift($elements);
        $b = array_shift($elements);
    } else {
        $a = $result;
        $result = [];
        $b = array_shift($elements);
    }

    foreach ($a as $val1) {
        foreach ($b as $val2) {
            $result[] = array_merge((array)$val1, (array)$val2);
        }
    }

    if (count($elements) > 0) {
        $result = combine2($elements, $result);
    }

    return $result;
}

$base = [[1, 2], [3, 4], [5, 6]];
var_export(combine2($base));

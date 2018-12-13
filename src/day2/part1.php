<?php

declare(strict_types=1);

$input = explode(PHP_EOL, getInput());
$twos = 0;
$threes = 0;

foreach ($input as $value) {
    $id = array_count_values(str_split($value));

    if (array_search(2, $id)) {
        $twos++;
    }

    if (array_search(3, $id)) {
        $threes++;
    }
}

return $twos * $threes;
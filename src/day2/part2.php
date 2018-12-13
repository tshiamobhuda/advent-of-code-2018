<?php

declare(strict_types=1);

$input = explode("\n", getInput());

foreach ($input as $value) {
    foreach ($input as $item) {
        if ($item !== $value) {
            $count = 0;

            foreach (str_split($value) as $key => $val) {
               if ($val !== $item[$key]) {
                   $count++;
               }
            }

            if ($count === 1) {
                return implode(array_intersect(str_split($value), str_split($item)));
            }
        }
    }
}

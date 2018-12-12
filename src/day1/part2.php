<?php

declare(strict_types=1);

$input = explode("\n", getInput());
$freq = [];

while (true) {
    foreach ($input as $val) {
        $freq[] = (isset($freq[count($freq) -1])) ? $freq[count($freq) -1] + $val : $val;
        if (array_search($freq[count($freq) -1], array_slice($freq, 0, count($freq) -1))) {
            return $freq[count($freq) -1];
        }
    }
}

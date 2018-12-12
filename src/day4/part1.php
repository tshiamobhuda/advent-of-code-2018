<?php

declare(strict_types=1);

$input = getInput();

return count(array_filter(explode("\n", $input), function ($passphrase) {
    $words = explode(' ', $passphrase);

    return count(array_unique($words)) === count($words);
}));

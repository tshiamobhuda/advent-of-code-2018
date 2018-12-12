<?php

declare(strict_types=1);

$input = getInput();

return count(array_filter(explode("\n", $input), function ($passphrase) {
    $words = explode(' ', $passphrase);

    for ($i = 0; $i < count($words); $i++) {
        $currentWord = str_split($words[$i]);
        sort($currentWord);
        $checkArray = $words;

        array_splice($checkArray, $i, 1);

        foreach ($checkArray as $checkWord) {
            $checkWord = str_split($checkWord);
            sort($checkWord);

            if ($checkWord === $currentWord) {
                return false;
            }
        }
    }

    return true;
}));

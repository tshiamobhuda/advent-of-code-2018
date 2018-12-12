<?php

declare(strict_types=1);

$input = getInput();

return array_sum(explode(PHP_EOL, $input));
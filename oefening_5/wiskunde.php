<?php

function faculteit(string $numberString) {
    if ($numberString === 0) {
        return 0;
    }
    $factorial = 1;
    for($i = 1; $i <= $numberString; $i++) {
        $factorial*=$i;
    }
    return $factorial;
}

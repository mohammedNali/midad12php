<?php
// declare(strict_types=1);

function add(int $a, int $b) : int {
    return $a + $b;
}

$result = add(5, 3);
echo "Result: $result";

echo '<br>';
$result = add("5", 3);
echo "Result: $result";
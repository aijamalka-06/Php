<?php

function no_space(string $str): string
{
    return preg_replace('/\s+/', '', $str);
}

function max_number(int $num): int
{
    $digits = [];
    
    while ($num > 0) {
        $digits[] = $num % 10;
        $num = intdiv($num, 10);
    }
    
    rsort($digits);
    
    $result = 0;
    foreach ($digits as $digit) {
        $result = $result * 10 + $digit;
    }
    
    return $result;
}

echo no_space(' Hello, world! ') . PHP_EOL;
echo max_number(123) . PHP_EOL;

?>
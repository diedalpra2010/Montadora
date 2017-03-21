<pre>
<?php

$a = 10;
$b = 20;
$c = 5;

$soma = function ($a, $b) use ($c)
{
    return $a + $b + $c;
};

$multi = function ($a, $b)
{
    return $a * $b;
};


function calc($val1, $val2, $op)
{
    return $op($val1, $val2);
}

echo calc(2,3, $soma);
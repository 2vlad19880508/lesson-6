<?php
// задача 1

 
function foo ($n) {
    echo $n % 10 . ' '; // делим по модулю
    if ($n>9) {
        foo($n/10); // рекурсия
    }
}
 
foo(5671);

echo '<BR>';

// задача 2
$num = 9;
function recursion($curIndex, $n)
{

    for ($i = 1; $i <= $curIndex; $i++) {
        echo $curIndex . ' ';
    }

    if ($curIndex != $n) {
        recursion(++$curIndex, $n);
    }
}

recursion(1, $num);

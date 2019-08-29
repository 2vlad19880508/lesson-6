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
$n = 10;

function func($cur, $idx, $cnt) {
    if ($idx === 0)
        return;
    if ($cnt === 0) {
        $cur++;
        $cnt = $cur;
    }
    echo $cur . ' ';
    func($cur, $idx - 1, $cnt - 1);
}

func(1, $n, 1);

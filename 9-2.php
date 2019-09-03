<?php
/* 2) Создайте две функции add() и sub(), которые принимают пару аргументов и возвращают сумму и разницу соответственно. 
Создайте функцию operation(), которая принимает два числовых аргумента $numOne и $numTwo, и третий строковый - имя функции которую нужно 
вызвать для выполнения операции над числамы.
*/

function add($num1, $num2)
{
   $add = $num1 + $num2;
   echo $add . '<br>';
}	



function sub($num1, $num2)
{
   $sub = $num1 - $num2;
   echo $sub . '<br>';
}	




function operation($numOne, $numTwo, $callback)
{
	if ($callback == 'add') {
		sub($numOne, $numTwo);
	} elseif ($callback == 'sub') {
		sub($numOne, $numTwo);
	} else {
		echo 'Задано некоректное значение';
	}
}

operation(70,8,'sub');







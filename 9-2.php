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




function operation($a, $b, $callback)
{
	if ($callback == 'add') {
		add($a, $b);
	} elseif ($callback == 'sub') {
		sub($a, $b);
	} else {
		echo 'Задано некоректное значение';
	}
}

operation(7,8,'sub');

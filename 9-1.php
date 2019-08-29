<?php
/*1) Напишите функцию operation(), которая принимает три аргумента: 
$numOne и $numTwo – числовые, $operator – строка, обозначающий операцию (add, subtract, multiply, divide). 
Функция должна возвращать результат выполнения оператора $operator над $numOne и $numTwo. Числа и оператор задавать через форму в браузере. 
*/


function operation($numOne, $numTwo, $operator)
{
	if ($operator == 'add') {		
	echo $numOne + $numTwo;
    } elseif ($operator == 'subtract') {		
	echo $numOne - $numTwo;
    } elseif ($operator == 'multiply') {		
	echo $numOne * $numTwo;
	 } elseif ($operator == 'divide') {		
	echo $numOne / $numTwo;
	 } else {
	echo $operator;
	 }
}	?>


<form action="9.php" method="POST" name="formMain" id="formMain">
  Число 1: <input type="text" name="ferst"><br>
  Число 2: <input type="text" name="second"><br>
  <select name="oper">
  <option>add</option>
  <option>subtract</option>
  <option>multiply</option>
  <option>divide</option>
  </select>
  <input type="submit" value="Вычислить">
 </form> 


<?php 
if($_POST) {
 

       if ($_POST['ferst'] == null) {
            echo 'Укажите число 1!';
        }


        elseif ($_POST['second'] == null) {
            echo 'Укажите число 2!';
        }
		 elseif ($_POST['oper'] == 'divide' &&  $_POST['second'] == '0') {
			
            echo 'Делить на НОЛЬ нельзя!';
			
        }

        else {

            $operator = $_POST['oper'];
			$numOne = $_POST['ferst'];
			$numTwo = $_POST['second'];
            }

        }   



operation($numOne, $numTwo, $operator);

function add($num1, $num2)
{
   $add = $num1 + $num2;
   echo $add . '<br>';
}	

add(7,8);

function sub($num1, $num2)
{
   $sub = $num1 - $num2;
   echo $sub . '<br>';
}	

sub(7,8);


function operation($a, $b, $callback)
{
    call_user_func($callback, $a, $b);
}

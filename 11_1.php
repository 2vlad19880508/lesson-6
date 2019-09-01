<?php 
$arr = [
	['name' => 'Yan', 'salary' => '1200', 'work_hours' => 180],
    ['name' => 'Barda', 'salary' => '2150', 'work_hours' => 160],
    ['name' => 'Piter', 'salary' => '1500', 'work_hours' => 160],
    ['name' => 'Alex', 'salary' => '3340', 'work_hours' => 167],
    ['name' => 'Deiv', 'salary' => '1700', 'work_hours' => 176],
    ['name' => 'Bob', 'salary' => '1150', 'work_hours' => 182],
    ['name' => 'Claus', 'salary' => '2810', 'work_hours' => 155],
    ['name' => 'Lina', 'salary' => '1600', 'work_hours' => 169],
    ['name' => 'Rod', 'salary' => '2780', 'work_hours' => 191],
    ['name' => 'Kristy', 'salary' => '2180', 'work_hours' => 144],
    ['name' => 'Ron', 'salary' => '1670', 'work_hours' => 157],
];

$arr = array_map(function ($salary) {
    $salary['salary'] = $salary['salary'] < 1600
        ? $salary['salary'] + 100
        : $salary['salary'];
    return $salary;
}, $arr);
?>

<h1>Задача 1. Всем сотрудникам у кого ЗП меньше 1600 добавить 100.</h1>
<table border="1" style="text-align: center;">
    <thead>
    <tr>
        <td style="padding: 10px">
            <b>Name</b>
        </td>
        <td style="padding: 10px">
            <b>Salary</b>
        </td>        
    </tr>
    </thead>
    <?php foreach ($arr as $salary): ?>
        <tr>
            <td>
                <?php echo $salary['name'] ?>
            </td>
            <td>
                <?php echo  $salary['salary'] ?>
            </td>            
        </tr>
    <? endforeach ?>
</table>

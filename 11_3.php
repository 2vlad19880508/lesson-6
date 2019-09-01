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


$arr = array_filter($arr, function($work_hours) {
    return $work_hours['work_hours'] < 160;
});

?>




<h1>Задача 3. Вывести всех сотрудников которые отработали меньше 160 часов.</h1>
<table border="1" style="text-align: center;">
    <thead>
    <tr>
        <td style="padding: 10px">
            <b>Name</b>
        </td>
       	<td style="padding: 10px">
            <b>work_hours</b>
        </td>  		
    </tr>
    </thead>
    <?php foreach ($arr as $work_hours): ?>
        <tr>
            <td>
                <?php echo $work_hours['name'] ?>
            </td>
           	<td>
                <?php echo  $work_hours['work_hours'] ?>
            </td>  			
        </tr>
    <? endforeach ?>
</table>

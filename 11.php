<?php 
$arr = [['name' => 'Yan', 'salery' => '1200', 'work_hours' => 180], 
		['name' => 'Barda', 'salery' => '2150', 'work_hours' => 160], 
		['name' => 'Piter', 'salery' => '1500', 'work_hours' => 160],
		['name' => 'Alex', 'salery' => '3340', 'work_hours' => 167], 
		['name' => 'Deiv', 'salery' => '1700', 'work_hours' => 176], 
		['name' => 'Bob', 'salery' => '1150', 'work_hours' => 182], 
		['name' => 'Claus', 'salery' => '2810', 'work_hours' => 155], 
		['name' => 'Lina', 'salery' => '1600', 'work_hours' => 169],
		['name' => 'Rod', 'salery' => '2780', 'work_hours' => 191], 
		['name' => 'Kristy', 'salery' => '2180', 'work_hours' => 144], 
		['name' => 'Ron', 'salery' => '1670', 'work_hours' => 157], 
		];
 
 
// задание 1
echo '<br>Всем сотрудникам у кого ЗП меньше 1600 добавить 100';
$salery = array_map( 
        function($salery) { 
		if ($salery['salery'] < 1600) {
			echo '<table border=1px width=200px>';
			echo '<tr>';
			echo '<td width=100px>' . $salery['name'] . '</td>'; 
			$bonus = $salery['salery'] + 100;
			echo '<td width=100px>' . $bonus . '</td>'; 
			echo '</tr>';
			echo '<table>';
		}
		}, 
        $arr 
); 


 
// задание 2
echo '<br>Сотрудники которые отработали больше 180 часов добавили премии 20 %';
$work_hours = array_map( 
        function($work_hours) { 
		if ($work_hours['work_hours'] > 180) {
			echo '<table border=1px width=200px>';
			echo '<tr>';
			echo '<td width=100px>' . $work_hours['name'] . '</td>'; 
			echo '<td width=100px>' . $work_hours['salery'] * 1.2 . '</td>'; 
			echo '</tr>';
			echo '<table>';
		}
		}, 
        $arr 
); 


  
// задание 3
echo '<br>Сотрудники которые отработали меньше 160 часов';
$work_hours2 = array_map( 
        function($work_hours2) { 
		if ($work_hours2['work_hours'] < 160) {
			echo '<table border=1px width=200px>';
			echo '<tr>';
			echo '<td width=100px>' . $work_hours2['name'] . '</td>'; 
			echo '<td width=100px>' . $work_hours2['work_hours'] . '</td>'; 
			echo '</tr>';
			echo '<table>';
		}
		}, 
        $arr 
); 


   
// задание 4

echo '<br>Сотрудники с зп меньше 2000';
$salery2 = array_map( 
        function($salery2) { 
		if ($salery2['salery'] < 2000) {
			echo '<table border=1px width=200px>';
			echo '<tr>';
			echo '<td width=100px>' . $salery2['name'] . '</td>'; 
			echo '<td width=100px>' . $salery2['salery'] . '</td>'; 
			echo '</tr>';
			echo '<table>';
		}
		}, 
        $arr 
); 


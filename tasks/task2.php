<?php 
//Task 1
echo '<h3>Task 1</h3>';

$a = rand(-100, 100);
$b = rand(-100, 100);

echo 'a = ' . $a . '<br>' . 'b = ' . $b . '<br>';

if ($a >= 0 && $b >= 0) {
	echo 'a - b = ' . ($a - $b);
}
elseif  ($a < 0 && $b < 0) {
	echo 'a * b = ' . ($a * $b);
}
else {
	echo 'a + b = ' . ($a + $b);
}

echo '<hr>';
//Task 2
echo '<h3>Task 2</h3>';

$a = rand(0, 10);
echo 'a = ' . $a . '<br>' . '<br>';
for ($i = $a; $i<=15; $i++){
switch($i){
	case $i<=15:
	echo 'a = ' . $i . '<br>';
}
}
echo '<hr>';
//Task 3
echo '<h3>Task 3</h3>';
$a = rand(-100, 100);
$b = rand(-100, 100);


echo 'a = ' . $a . '<br>' . 'b = ' . $b . '<br>';
function sum($a, $b){
	$c = $a + $b;
	return $c;
}
function razn($a, $b){
	$c = $a - $b;
	return $c;
}
function umn($a, $b){
	$c = $a * $b;
	return $c;
}
function del($a, $b){
	if ($b !=0) {
	$c = $a / $b;
	}
	else $c = ' Делить на 0 нельзя ';
	return $c;
}

echo 'Сумма :' . sum($a, $b). '<br>' . 'Разность :' . razn($a, $b). '<br>' . 'Произведение :' . umn($a, $b). '<br>' . 'Частное :' . del($a, $b);

echo '<hr>';

//Task 4

echo '<h3>Task 4</h4>';
$arg1 = rand(-100, 100);
$arg2 = rand(-100, 100);
echo 'arg1 = ' . $arg1  . '<br>' . 'arg2 = ' . $arg2  . '<br>';

function mathOperation($arg1, $arg2, $operation)
{  switch ($operation ){
    case 'sum':
	return  sum($arg1, $arg2);
	case 'razn':
	return  razn($arg1, $arg2);
	case 'umn':
	return  umn($arg1, $arg2);
	case 'del':
	return  del($arg1, $arg2);
	default:
	echo 'Введите верное значение операции : sum,razn, umn, del <br>';
}
}

echo 'Сумма :' . mathOperation($arg1, $arg2, 'sum') . '<br>'. 'Разность :' . mathOperation($arg1, $arg2, 'razn'). '<br>' . 'Произведение :' . mathOperation($arg1, $arg2, 'umn'). '<br>' . 'Частное :' . mathOperation($arg1, $arg2, 'del');

echo '<hr>';

//Task 6

echo '<h3>Task 6</h4>';
$val = rand(0, 10);
$pow = rand(0, 10);
echo '$val = ' . $val  . '<br>' . '$pow = ' . $pow . '<br>';

function power($val, $pow){
	if($pow == 0){
		return 1;
	}
	return $val*power($val, $pow-1);
		
	
}
	echo  $val . '^' . $pow . '=' . power($val, $pow);

	echo '<hr>';

//Task 7

echo '<h3>Task 7</h4>';
$hour = date('G');
$minutes = date('i');
function time1($hour, $minutes)
{	
		if ($hour == 1 || $hour == 21) 
		{
		$h = " час";
		}
		elseif (($hour>=2 && $hour<=4) || ($hour>=22 && $hour<=24)) {
		$h = " часа";
		}
		else {$h = " часов";
		}
		if (($minutes<20) || ($minutes>10))
		{
			$m = " минут.";
			
		}
		elseif (($minutes % 10) === 1) {
		$m = " минута.";
		}
		elseif ((($minutes % 10)>=2) && (($minutes % 10)<=4)) 
		{
		$m = " минуты.";
		}
		else 
		{
		$m = " минут.";
		}
		return $hour . $h . " " . $minutes . $m;
	
	
}
echo time1($hour, $minutes);
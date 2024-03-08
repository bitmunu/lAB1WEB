<?php

$very_bad_unclear_name = "nonono";
$order = & $very_bad_unclear_name;

$order .= "yes";
echo"\nMy order is: $very_bad_unclear_name\n";

$var = 5;
$var2 = 7;
$flot = 1.2e4;
echo"int, int, float: \n{$var}\n{$var2}\n{$flot}\n";
echo $var+$var2;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n";
echo "last - this: ", $last_month - $this_month, "\n";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / 4;
echo "days per language: {$days_per_language}\n";

echo 8**2, "\n";
$my_num = 19;
$answer = $my_num;
$answer +=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$my_num;
echo $answer, "\n";

$a=10;
$b=3;
echo $a % $b, "\n";

if($a % $b == 0) {
      echo 'Делится: ', $a / $b;
    }

else{
    echo 'Делится с остатком: ', $a % $b;
}

$st = pow(2, 10);
$st2 = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;

foreach($arr as $key => $value) {
    $sum += $value**2;
}
echo "\n", sqrt($sum);
echo "\n", $sum;

$d = sqrt(379);
echo"\n{$d}\n";
echo round($d), " ", round($d, 1), " ", round($d, 2), "\n";

$d = sqrt(587);
$arr2 = Array('floor' => floor($d), 'ceil' => ceil($d));

$arr3 = [ 4, -2, 5, 19, -130, 0, 10];
$min = min($arr3);
$max = max($arr3);

echo "Случайное число: ", rand(1, 100), "\n";
$arr4 = [];

for($i=0; $i <= 9; $i++) {
    $arr4[] = rand(1, 100);
}

$a = 15;
$b = -1872;
echo "Тест скрипта первый: ", abs($a-$b), "\n";
$a = 15989;
$b = 1872;
echo "Тест скрипта второй: ", abs($b-$a), "\n";

$arr5 = [1, 2, -1, -2, 3, -3];
$arr6 = [];

for($i=0; $i <= 5; $i++) {
    $arr6[] = abs($arr5[$i]);
}

$n = 42;
$arr7 = [];
echo "Делители n: ";
for($i=1; $i <= $n/2 +1; $i++) {
    if ($n%$i == 0) {
        $arr7[] = $i;
        echo "{$i} ";
    }
}
echo "\n";

$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum2 = 0;
$j = 0;
while($sum2 <= 10) {
    $sum2+=$arr8[$j];
    $j +=1;
}
echo"Нужно сложить первые {$j} элементов\n";

function printStringReturnNumber($string)
{
echo $string;
return 14;
}

$my_num = printStringReturnNumber("pepega");
echo"\n$my_num";

function increaseEnthusiasm($string)
{
    $string .= "!";
    return $string;
}
echo "\n", increaseEnthusiasm("pepegato");

function repeatThreeTimes($string){
    return $string . $string. $string;
}
echo "\n", repeatThreeTimes("no");
echo "\n", increaseEnthusiasm(repeatThreeTimes("nono"));

function cut($string, $num=10){
    return substr($string, 0, $num);
}

function printArr($arr, $count=0){
    echo"\n {$count}: {$arr[$count]}";
    if($count+1 != sizeof($arr)){
        printArr($arr, $count+1);}
}
printArr($arr7);

function sumOfDigits($num) {
    $sum = 0;
    while($num!=0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    //echo $sum, "\n";
    if($sum>9){
        sumOfDigits($sum);
    }
    else{
        return;
    }
}


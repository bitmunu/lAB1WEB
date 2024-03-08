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

$arr9 = [];
function Repeat($arr, $string, $ogstring, $counter, $times){
    $arr[] = $string.$ogstring;
    echo"\n", $string.$ogstring;
    if($counter+1 != $times) {
        Repeat($arr,$string.$ogstring, $ogstring, $counter+1, $times);
    }
    return;
}

Repeat($arr9, "", "x", 0, 5 );

function arrayFill($string, $numver){
    $arr10 = [];
    for($i=0; $i<=$numver; $i++){
        $arr10[] = $string;
    }
    return $arr10;
}

function matrixSum(array $arr){
    $sum = 0;
    foreach ($arr as $subarr){
        foreach($subarr as $elem){
            $sum+=$elem;
        }
    }
    return $sum;
}
echo "\n", matrixSum([[1, 2, 3], [4, 5], [6]]);

function createArr($size, $chunk_size){
    if($size % $chunk_size !=0){
        return;
    }
    $arr = [];
    $counter = 1;

    for($i = 0; $i <= (int)($size / $chunk_size)-1; $i++){
        $subarr = [];

        for($j=0; $j <= $chunk_size-1; $j++){
            $subarr[] = $counter;
            $counter++;
        }
        $arr[] = $subarr;
    }

    foreach ($arr as $subar){
        foreach ($subar as $elem){
            echo"\n", " {$elem}";
        }
    }
}

createArr(9, 3);

$mas = [2, 5, 3, 9];
$result = $mas[0] * $mas[1] + $mas[2] * $mas[3];
echo "\n", $result, "\n";

$user = Array('name'=> "5", 'surname'=>"0", 'patronymic' => "cent");
echo"{$user['name']} {$user['surname']} {$user['patronymic']}\n";

$date = Array('year'=> "2024", 'month'=>"03", 'day' => "08");
echo"{$date['year']} {$date['month']} {$date['day']}\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo"Количетсво элементов: ", sizeof($arr), "\n";
echo"Последние элементы: ", $arr[4], ", ", $arr[3], "\n";


function forReal($a, $b){
    if ($a + $b > 10){
        return True;
    }
    else{
        return False;
    }
}

function forRealYes($a, $b){
    if ($a == $b > 10){
        return True;
    }
    else{
        return False;
    }
}

$test = 0;
if ($test == 0) echo "\nВерно\n";

$age = 76;

if($age <10 || $age >99){
    echo"yes1\n";
}
else if($age >= 10 and $age <=99){
    $k = $age;
    $new_sum=0;
    while($k!=0){
        $new_sum +=$k%10;
        $k = (int)($k/10);
    }
    echo"sum is {$new_sum}\n";
    if($new_sum <=9) echo"сумма цифр однозначна\n";
    else{
        echo"сумма цифр двузначна\n";
    }
}

$arro = [1, 2, 3, 4];
if(sizeof($arro)==3){
    echo array_sum($arro), "\n";
}

Repeat($arr9, "", "x", 0, 20);


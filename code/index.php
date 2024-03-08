<?php
$very_bad_unclear_name = "nonono";
$order = & $very_bad_unclear_name;

$order .= "yes";
echo"\nMy order is: $very_bad_unclear_name<br/>";

$var = 5;
$var2 = 7;
$flot = 1.2e4;
echo"int, int, float: \n{$var}\n{$var2}\n{$flot}\n<br/>";
echo $var+$var2;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n<br/>";
echo "last - this: ", $last_month - $this_month, "<br/>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / 4;
echo "days per language: {$days_per_language}<br/>";

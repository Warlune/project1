<?php

define('NUMBER', 100);

$number = mt_rand(1, NUMBER);

echo exec('clear');

fwrite(STDOUT, 'Please choose a number 1-100. ');

$value = trim(fgets(STDIN));

echo exec('clear');

fwrite(STDOUT, 'Please guess if the number is higher or lower. ');

$answer = strtolower(trim(fgets(STDIN)));

echo exec('clear');

if(($answer == 'lower') && ($value < $number)) {
	fwrite(STDOUT , "correct $value is lower than $number\n");
} elseif (($answer == 'higher') && ($value > $number)) {
	fwrite(STDOUT , "correct $value is higher than $number\n");
} elseif (($answer == 'lower') && ($value > $number)) {
	fwrite(STDOUT , "Incorrect, $value is higher than $number\n");
} elseif (($answer == 'higher') && ($value < $number)) {
	fwrite(STDOUT , "Incorrect $value is lower than $number\n");
} elseif (($answer == 'higher') || ($answer == 'lower') && ($value == $number)) {
	fwrite(STDOUT , "Incorrect $value is equal to $number\n"); 
} else {
	echo "im not sure what happened\n";
}
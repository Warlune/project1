<?php


if($argc == 3) {
	if(is_numeric($argv[1]) && (is_numeric($argv[2]))) {
		
		if ($argv[1] <= $argv[2]) {
			$number = mt_rand($argv[1], $argv[2]);
			
		} elseif ($argv[1] >= $argv[2]) {
			$number = mt_rand($argv[2], $argv[1]);
		}

	} else {
		echo "you need to use integers\n";
		exit(0);
	}
} else {
	// output ask for lower number

	// ask it for higher number
}

				
echo exec('clear');

fwrite(STDOUT, 'Would you like to play a game? ');

$ans = strtolower(trim(fgets(STDIN)));

echo exec('clear');

if ($ans == 'yes') {
	fwrite(STDOUT, 'Please choose a number 1-100. ');

	$value = trim(fgets(STDIN));

	echo exec('clear');

	echo "creating a random number for X\n";

	while($i < 7) {
		echo '.';
		sleep(1);
		$i++;
	}

	echo exec('clear');

	fwrite(STDOUT, "Please guess if $value is higher or lower than X. ");

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
		echo "Please enter a integer\n";
	}
} else {
	echo "come back when you would like to play.\n";
}

	
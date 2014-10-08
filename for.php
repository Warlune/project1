<?php

/*
Gather starting numbers
*/
fwrite(STDOUT, 'Please enter a starting number ');
$input1 = trim(fgets(STDIN));

fwrite(STDOUT, 'Please enter an ending number ');
$input2 = trim(fgets(STDIN));

fwrite(STDOUT, 'Please enter a number to increment by ');
$input3 = trim(fgets(STDIN));

if(is_numeric($input3)){
	$increment = $input3;
} else {
	$increment = 1;
}

if(is_numeric($input1) && is_numeric($input2)) {
		if($input1 < $input2){
			$min = $input1;
			$max = $input2;
		} else{
			$min = $input2;
			$max = $input1;
		}
		for ($min = $min; $min <= $max; $min += $increment){
			echo "\$input1 has a value of {$min}\n";
		}

} else {
	fwrite(STDOUT, "You must use an integer!" );
}
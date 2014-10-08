// <?php

// define('NUMBER', 100);

// $number = mt_rand(1, NUMBER);

// echo exec('clear');

// fwrite(STDOUT, 'Please guess the random number. ');

// $answer = trim(fgets(STDIN));

// echo exec('clear');

// while ($answer != $number){
// 	if($answer == $number){ 
// 			fwrite(STDOUT , "correct");
// 			 }else {
// 			      if ($answer < $number) {
// 				fwrite(STDOUT , "Higher\n");
// 			} elseif ($answer > $number) {
// 				fwrite(STDOUT , "Lower\n");
// 			} else {
// 				echo "im not sure what happened\n";
// 			}
// 		}
// 	}

		
// $count ='1';
// do {
// 	echo "$count\n";
// 	$count++;
// 	sleep(1);
	
// } while($count <= 5);
//
?>

<?php

fwrite(STDOUT, 'Want to play a game? ');

$answer = trim(fgets(STDIN));

$random = rand(1, 100);

if ($answer == 'yes') {

	fwrite(STDOUT, 'Guess a number between 1 to 100 ');

	$input = trim(fgets(STDIN));

	do  {

			if($input < $random) {
				fwrite(STDOUT, "Guess Higher\n");
			} else {
				fwrite(STDOUT, "Guess Lower\n");
			}
		} while ($input != $random);
	} else {
		fwrite (STDOUT, "Downloading Virus\n");

		$i = 0;
		while($q < 30)
	}
	
	fwrite(STDOUT, "You win\n");
}
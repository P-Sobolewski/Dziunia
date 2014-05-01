start
<br/>
<?php

$wartosc1 = 3;
$wartosc2 = 5;

/*
// tutaj wyswietlamy Hello World
$tekst1 = 'Hello';
$tekst2 = 'World';
echo $tekst1 . ' ' . $tekst2;
*/

//var_dump($wartosc1);

//fizzBuzz($wartosc1);
fizzBuzz();

function fizzBuzz($maxValue = 15) {
   
	for ($i = 1; $i <= $maxValue; $i++) {
		if ($i %3 == 0 && $i %5 == 0) {
			echo 'FizzBuzz';
		}
		elseif ($i %3 == 0){
			echo 'Fizz';
		}
		elseif ($i %5 == 0) {
			echo 'Buzz';
		}
		else {
			echo $i;		
		}


		echo '<br/>';
	}	
};

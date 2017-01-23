<?php

$person = array(1 , 2, 3, "mormi", "oshmo");

foreach ($person as $printit) {
	# code...
	echo $printit; 
	echo "<br>";
}

echo "<h1> Associative Array </h1>";

$fruits  = array('apple' => 'red', 'orange' => 'orange', 'banana' => 'yellow' );

foreach ($fruits as $fruit => $color) {
	# code...
	echo $fruit . " color is " . $color;
	echo "</br>";
}

?>
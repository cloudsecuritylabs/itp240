<?php
	$name = 'Fred';
	$str = 'Hello, $name';
	echo $str;
	echo "<br>";

	$name = 'Tim O\'Reilly';
	echo $name;
	$path = 'C:\\WINDOWS';
	echo $path;
	$nope = '\n';
	echo $nope;
	echo "<br>";

	$meta_tags = get_meta_tags('http://www.cnn.com');
	echo "Web page made by {$meta_tags['description']}";
	#print_r($meta_tags);

	isValidCreditCard();
	

?>
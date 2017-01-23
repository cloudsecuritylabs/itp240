<?php
global $a;
$a = 20;

function test() {
	global $a;
	$a++;
}

test();
test();

echo $a;



function statictest()
{
	static $counter=0;
	return $counter++;
}


statictest();
statictest();
echo statictest();
?>
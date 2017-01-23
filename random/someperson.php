<?php

/**
* 
*/
class Person
{

	var $name = '';


	function name($newname = NULL)
	{
		# code...
		if (! is_null($newname)) {
			# code...
			$this->name = $newname;
		}

		return $this->name;
	}
}

/**
*
*/
$ed = new Person;
$ed->name('Ankan');
printf($ed->name);


?>
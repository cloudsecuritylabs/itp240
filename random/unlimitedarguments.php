<?php
	
	function countallargs() {
		$sum = 0;
		if (func_num_args()==0)
			return false;
		else
			for ($i=0; $i < func_num_args() ; $i++) { 
				$sum += func_get_arg($i);		# code...
			}
			return $sum;

	}



echo countallargs(10,20,30);
?>

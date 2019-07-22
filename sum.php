<?php 
	
	$sum = 0;
	$n = 5;
	for ($i=1; $i < $n; $i++) { 
		echo "$i ";
		if ($i < $n-1) {
			echo "+";
		}
		
		$sum = $sum + $i;
	}

	echo "= " . $sum;

 ?>
<?php 

	function demo($n){
		if ($n<0) {
			# code...
			return -1;
		} 
		if($n == 0){
			return 1;
		}
		else {
			# code...
			return $n + demo($n - 1);
		}
	}

	echo demo(4);

 ?>
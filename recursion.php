<?php 

	function demo($n){
		if ($n<0) {
			# code...
			return -1;
		} 
		if($n == 0){
			return 0;
		}
		else {
			# code...

			return  demo($n - 1) + $n;
		}
	}

	echo demo(4);

 ?>
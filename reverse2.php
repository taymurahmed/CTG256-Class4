<?php 
	
	$i = 25;

	while ($i != 0) {
		$x = $i%10;
		$y = (int)($i/10);
		echo "$x" . "$y". "<br>";
		$i--;
	}

 ?>
<?php 
	
	$i = 25;
	echo "<h1>Reverse numbers from $i to 0</h1>";
	while ($i != -1) {
		$x = $i%10;
		$y = (int)($i/10);
		echo "$x" . "$y". "<br>";
		$i--;
	}

 ?>
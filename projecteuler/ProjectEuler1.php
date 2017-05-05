<?php

function Problem1($limitNumber){
	$sum = 0;
	for($i=1 ; $i<$limitNumber ; $i++){
		if(($i%3) == 0){
			$sum += $i;
		}
		if(($i%5) == 0){
			$sum += $i;
		}
	}

	return $sum;
}

echo Problem1(1000);

?>
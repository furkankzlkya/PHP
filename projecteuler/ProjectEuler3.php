<?php

function LargestPrimeFactor($number){
	$i = 2;
	$temp = $number;
	$result = 2;
	while ($temp != 1) {
		if($temp%$i == 0){
			$result = $i;
			$temp = $temp/$i;
		}
		else{
			$i++;
		}
	}

	return $result;
}

echo sqrt(19);

?>
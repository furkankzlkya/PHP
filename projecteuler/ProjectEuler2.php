<?php

/*
 * Fibonacci serisinde verilen sayıdan küçük en büyük çift sayıyı döndürür
 */
function FibonacciSumEven($limitNumber){
	$firstNumber = 1;
	$secondNumber = 1;
	$tmp = 1;
	$sumReturn = 1;

	while ($limitNumber > $secondNumber) {
		if(($secondNumber%2) == 0){
			$sumReturn = $secondNumber;
		}
		$tmp = $secondNumber;
		$secondNumber = $secondNumber + $firstNumber;
		$firstNumber = $tmp;
	}

	return $sumReturn;
}

echo FibonacciSumEven(4000000);
?>
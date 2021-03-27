<?php 

// n - хипстеры, m - смузи

function smoothie_amount($n, $m){
	if( ($m < 0 && $n < 0) || ($m < 0 || $n < 0)){
  	echo "Введите корректное значение";
	}
	elseif($n>$m || $m === 0 || $n === 0){
		$result = 0;
		return $result;
	}
	elseif( $m % $n !== 0){
		$result = floor($m / $n);
		return $result;
	}
	else{
		$result = $m / $n;
		return $result;
	}
}

$result1 = smoothie_amount(8, 9);
echo $result1; // 1
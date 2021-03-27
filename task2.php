<?php 

function prefix_search($prefix, $strings){
	$result = array();
	foreach ($strings as $value){
	  if (strpos($value, $prefix) === 0){
	        $result[] = $value;
	  }
	}
	return $result;
}
 
$prefix = 'класс';
$strings = array('классный', 'первоклассник', 'второклассник', 'клас', 'класс'); 
$result1 = prefix_search($prefix, $strings);
print_r($result1); 
/*
Array
(
    [0] => классный
    [1] => класс
)
*/
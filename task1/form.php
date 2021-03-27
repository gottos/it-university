<?php 

$inp = $_POST['ourForm__inp'];

if((is_numeric($inp) === false) || $inp <= 0){
	echo 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
}
elseif(($inp % 4 === 0 && $inp % 100 !== 0) || $inp % 400 === 0){
	echo 'ДА';
}
else{
	echo 'НЕТ';
}
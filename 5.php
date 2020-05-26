<?php

function replace($word) {
	echo str_replace(" ", "_", $word);
};
 
replace("Функция заменяющая пробелы на подчеркивания");
?>
<?php

function chopExtension($filename) {
    return pathinfo($filename, PATHINFO_FILENAME);
}

var_dump(chopExtension('array.php'));






























////Ben - ның жасын шығару үшін ? орнына ""$age[Ben]"" деп жазамыз
//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//echo "Ben is " . "$age[Ben]" . " years old.";

//$fruits = array("Apple", "Banana", "Orange");
//echo count($fruits); // Массив элементтерінің санын табу үшін count () әдісін қолданамыз
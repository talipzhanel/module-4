<?php
//Екінші тапсырмадағы функция терминалға шығармасын, текстті қайтарсын.
//Сіз оны $info айнымалысына жазып кейін терминалға шығарыңыз.
//type filename.php
//function chopExtension($filename) {
//    return pathinfo($filename, PATHINFO_FILENAME);
//}
//
//var_dump(chopExtension('function.php')); // string(3) "bob"
////var_dump(chopExtension('bob.i.have.dots.zip')); // string(15) "bob.i.have.dots"
//function chopExtension($filename)
//{
//    return substr($filename, 0, strrpos($filename, '.'));
//}
//function getInfo(string $name, int $age)
//{
//    return $name . ': ' . $age;
//}
//
//$info= getInfo('Zhanel', 19);
//
//echo $info;


//5. `$text = ‘1,4,2,67,55,43,90,100’` массив елементтеріне жүктеңіз.
//Результат `$textArray = [’1’, ‘4’, ‘2’, ‘67’, ‘’55, ‘43’, ‘90’, ‘100’]` осындай массив шығу керек. (интернет қолдануға болады)
//
//6. Санның факториалын (теріс емес бүтін сан) есептейтін функцияны жазыңыз. Функция санды аргумент ретінде қабылдайды.
//
//$a = 5;
//
//function getFactorial(int $a) : int
//{
//    код жазылады
//    return $айнымалы
//}
//
//Результат 120, өйткені 5 тің факториалы ол 1 * 2 * 3 * 4 * 5 = 120;

function splitTextToArray($text) {
    $textArray = explode(',', $text);
    return $textArray;
}

// Берілген мәтін
$text = '1,4,2,67,55,43,90,100';

// Функцияны шақырады
$textArray = splitTextToArray($text);

// Нәтижені көрсетеді
print_r($textArray);


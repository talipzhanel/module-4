<?php
//Санның факториалын (теріс емес бүтін сан) есептейтін
// функцияны жазыңыз. Функция санды аргумент ретінде қабылдайды
//$a = 5;
//$sum=0;
//$fact=1;
//
//function getFactorial(int $a) : int
//{
//    for($i=1; $i<=5; $i++)
//    {
//        $sum += i;
//       $fact *= i;
//    }
//    return $a;
//}
function getFactorial(int $a) : int
{
    if ($a === 0 || $a === 1)
    {
        return 1;
    } else {
        return $a * getFactorial($a - 1);
    }
}

$a = 5;
$result = getFactorial($a);
echo "Факториалы: " . $result;



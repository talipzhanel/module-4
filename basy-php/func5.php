<?php
function splitTextToArray($text) {
    $textArray = explode(',', $text);
    return $textArray;
}

// Берілген мәтін
$text = '1,4,2,67,55,43,90,100';

// Функцияны шақырады
$textArray = splitTextToArray($text); //: string[];

// Нәтижені көрсетеді
print_r($textArray);



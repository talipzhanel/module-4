<?php
$color = readline('Светофорда қай түс жанды:');
switch ($color)
{case "red" :
        echo "тоқта!";
        break;
    case "yellow":
        echo "дайындал!";
        break ;
    case "green":
        echo "жүре беріңіз!";
        break;
    default:
        echo "Светофорда бұл түс жоқ!";
}




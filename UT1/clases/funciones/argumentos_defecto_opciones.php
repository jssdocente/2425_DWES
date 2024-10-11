<?php
declare( strict_types = 1 ); 

function suma(int $a=0, int $b=5,int $c=5) : int {
    return $a +$b + $c;
}

suma(2,c:6);

echo "Suma 5+(defecto) " . suma(b:7) . "=" . "<br>";
echo "Suma 5+7 " . suma(5,7) . "=" . "<br>";

echo "$mensaje";

?>

<?php

function sumaParametros() {
    if (func_num_args() == 0) {
        return 0;
    } else {
        $suma = 0;

        for ($i = 0; $i < func_num_args(); $i++) {
            $suma += func_get_arg($i);
        }

        return $suma;
    }
}

function sumaParametrosMejor(...$numeros) {
    if (count($numeros) == 0) {
        return false;
    } else {
        $suma = 0;

        foreach ($numeros as $num) {
            $suma += $num;
        }

        return $suma;
    }
}


$cabeza = [3,4,4];
$cola = [1,3];

$merge = [...$cabeza,...$cola];

$nums = [5,5,5,34,5,5,56,56,56,5,654645];

$total = sumaParametros(5,5,5);
$totalV = sumaParametrosMejor(5,5,5,34,5,5,56,56,56,5,654645);
$totalV = sumaParametrosMejor(4,5,6,3,2);
$totalV = sumaParametrosMejor(4,5);
$totalV2 = sumaParametrosMejor(...$nums);

echo "Total parametros variables= $total . <br>";
echo "Total parametros variadics= $totalV . <br>";
echo "Total parametros variadics2 = $totalV2 . <br>";

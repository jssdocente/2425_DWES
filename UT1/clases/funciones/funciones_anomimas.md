<?php
$multiply2 = function ($x) {
    return $x * 2;
};

$multiply4 = function ($x) {
    return $x * 4;
};


// echo "Function anomima:" . $multiply2(20) . "<br>"; // 200
// echo "Function normal:" . multipyx2(20)  . "<br>"; // 200

// function recorrerAndOperar($array) {
//     $arrNuevo = [];
//     foreach($array as $num) {
//         //echo "Valor del numero: " . $num . "<br>";
//         $arrNuevo[]=$multiply2($num);
//     }

//     return $arrNuevo;
// }

function recorrerAndOperarAnonima($array,$fn) {
    $arrNuevo = [];
    foreach($array as $num) {
        //echo "Valor del numero: " . $num . "<br>";
        $arrNuevo[]=$fn($num);
    }

    return $arrNuevo;
}

$sumar2 = function ($x) {
    $valor = "hola";
    return $valor . $x . ", ";
};

$nums = [1,2,3,4,5];

//Llamo con funcion anomima en una variable
$arrNuevo = recorrerAndOperarAnonima($nums,$sumar2);
print_r($arrNuevo);

//Arrow Functions
$arrNuevo2 = recorrerAndOperarAnonima($nums,fn($item) => $item + 2);
print_r($arrNuevo2);

$arrNuevo3 = recorrerAndOperarAnonima($nums,function($item) {
    $valor = "hola";
    return $valor . $item . ", ";
});

print_r($arrNuevo3);

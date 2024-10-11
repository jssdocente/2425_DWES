<?php

$nums = [1, 2, 3, 4, 5];
$arrNuevo = array_map(fn($item) => $item * 2, $nums);
//print_r($arrNuevo);

$nums = [1, 2, 3, 4, 5];
$pares = array_filter($nums, fn($n) => $n % 2 == 0);
//print_r($pares);

$ciudades = [
    "badajoz" => [
        "nhab" => 80000,
        "capital" => "Badajoz"
    ],
    "caceres" => [
        "nhab" => 50000,
        "capital" => "Badajoz"
    ]
];


$ciudadesMayor7000= array_filter($ciudades, function($info) {
    return $info["nhab"]>40000;
});
//print_r($ciudadesMayor7000);


$provincias = [
    [
      "CODPROV"=> "15",
      "NOMBRE_PROVINCIA"=> "A Coruña",
      "CODAUTON"=> "12",
      "COMUNIDAD_CIUDAD_AUTONOMA"=> "Galicia",
      "CAPITAL_PROVINCIA"=> "A Coruña"
    ],
    [
        "CODPROV"=> "16",
        "NOMBRE_PROVINCIA"=> "Barcelona",
        "CODAUTON"=> "12",
        "COMUNIDAD_CIUDAD_AUTONOMA"=> "Galicia",
        "CAPITAL_PROVINCIA"=> "Barcelona"
      ],
    [
      "CODPROV"=> "03",
      "NOMBRE_PROVINCIA"=> "Alacant/Alicante",
      "CODAUTON"=> "10",
      "COMUNIDAD_CIUDAD_AUTONOMA"=> "Comunitat Valenciana",
      "CAPITAL_PROVINCIA"=> "Alicante/Alacant"
    ],
    [
      "CODPROV"=> "02",
      "NOMBRE_PROVINCIA"=> "Albacete",
      "CODAUTON"=> "08",
      "COMUNIDAD_CIUDAD_AUTONOMA"=> "Castilla-La Mancha",
      "CAPITAL_PROVINCIA"=> "Albacete"
    ],
];

$codautm= array_filter($provincias, fn($item) => $item["CODAUTON"]=="12");
print_r($codautm);

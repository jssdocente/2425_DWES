<?php

function dolarToEuro($dolar, $factor = 0.93) {
    return $dolar * $factor;
}

function euroToDolar($euro, $factor = 1.08) {
    return $euro * $factor;
}

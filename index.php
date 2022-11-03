<?php
/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

function dividesBy5(int $number) {
    return $number/5;
}

$num = 10;

echo dividesBy5($num);
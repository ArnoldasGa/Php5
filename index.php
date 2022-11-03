<?php
/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

function dividesBy5(int $number) : int {
    return $number/5;
}

$num = 10;

echo dividesBy5($num) . PHP_EOL;

/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.
Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/


function arrayPrinter(array $mass) {
    for ($i = 0; $i < count($mass); $i++) {
        echo $mass[$i] . PHP_EOL;
    }
}

arrayPrinter(['some text', 'another text']);

/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.
Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'
Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

function stringEnhancer(string $text1, string $text2 = "**" ) : string {
    return $text2 . $text1 . $text2;
}

echo stringEnhancer('some text', '##') .PHP_EOL;
echo stringEnhancer('some text') .PHP_EOL;
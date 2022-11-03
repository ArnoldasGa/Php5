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

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį.
Funkcijos kvietimas:
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
Funkcija grąžina: funkcija nieko negrąžina
*/

$x = 'some text';

function stringModifier(string &$modify, string $text) {
    $modify = $text . $modify . $text;
}

echo $x .PHP_EOL;

stringModifier($x, '##');

echo $x .PHP_EOL;

/*
5. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą.
Funkcijos kvietimas:
textReplicator('some_text', 3);
Funkcija grąžina: 'some_text-some_text-some_text'
Funkcijos kvietimas:
textReplicator('some_text', null);
Funkcija grąžina: 'some_text'
*/

function textReplicator(string $text, $number) : string {
    if ($number != null){
        for ($i = 1 ; $i < $number ; $i++){
            $text = $text . '-' . $text;
        }
    }
    return $text;
}

echo textReplicator('some_text', 3) .PHP_EOL;
echo textReplicator('some_text', null) .PHP_EOL;
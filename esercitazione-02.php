<?php

/**
 * Esercizio 1
 * Dato un insieme di valori, trovare il numero più alto
 */
$valori = [1, 3, 5, 2, 5, 3, 9, 4, 7];
$massimo = 0;
for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] > $massimo) :
        $massimo = $valori[$i];
    endif;
endfor;
echo "Il valore massimo è: " . $massimo . "</br>";

/** 
 * Esercizio 2
 * Stampa tutti gli elementi di un array finchè l'elemento corrente è inferiore a 15
*/
$valori = [12, 13, 5, 12, 15, 3, 19, 4, 17];
$output = " ";
for ($i = 0; $i < count($valori); $i++) :
    if ($valori[$i] < 15) :
        $output .= $valori[$i] . " ";
        else :
        break;
    endif;
endfor;
echo "I valori inferiori a 15 sono: " . $output . "</br>";

/**
 * Esercizio 3
 * Stampa il nome di tutte le persone maggiorenni
 * Calcola l'età media di tutte le persone (maggiorenni e minorenni)
 */
$persone = [
    array(
        "nome" => "Mario", 
        "età" => 19
    ),
    array(  
        "nome" => "Lucia",
        "età" => 14
    ),  
    array(
        "nome" => "Rosa",
        "età" => 21
    ),
    array(
        "nome" => "Francesco",
        "età" => 24
    ),
    array(
        "nome" => "Giuseppe",
        "età" => 16
    ),
    array(
        "nome" => "Marta",
        "età" => 22
    )
];
$output = " ";
$somma = 0;
for ($i = 0; $i < count($persone); $i++) :
    $somma += $persone[$i]["età"];
    if ($persone[$i]["età"] >= 18) :
        $output .= $persone[$i]["nome"] . " ";
    endif;
endfor;
echo "Le persone maggiorenni sono: " . $output . "</br>";

$media = $somma / count($persone);
echo "L'età media delle persone è: " . $media . "</br>";

/**altrimenti con foreach
 * foreach ($persone as $persona) :
 * if ($persona["età"] >= 18) :
 * echo $persona["nome"] . " ";
 * endif;
 * $anni += $persona["età"];
 * endforeach;
 */

/**
 * Esercizio 4
 * Data l'età di una persona,ritorna vero o falso se può guidare il 125cc (età minima 16 anni)
 */
 function può_guidare_125cc($età) {
    if ($età >= 16) {
        return true;
    } else {
        return false; // oppure return false senza else
    }
 }
    $età = 15;
    if (può_guidare_125cc($età)) {
        echo "Può guidare il 125cc</br>";
    } else {
        echo "Non può guidare il 125cc</br>";
    }
    $età = 18;
    if (può_guidare_125cc($età)) {
        echo "Può guidare il 125cc</br>";
    } else {
        echo "Non può guidare il 125cc</br>";
    }

/**
 * Esercizio 5
 * Dato un numero, verifica se è divisibile per 3
 */
function n_divisibile_per_3($n) {
     if ($n % 3 == 0) {
        return true;
    } else {
        return false;
    }
} // oppure solo return $n % 3 == 0;
   

/**
 * Esercizio 6
 * Dato un numero, ritornalo in formato euro (€ 10,00)
 */
function formatta_in_euro($importo) {
    return "€ " . number_format($importo, 2, ",", ".");
}
echo formatta_in_euro(1936.2) . "</br>";
?>
<?php
     // Commento in linea
     /* Commento
     su più righe 
    */

    /* Stringhe */
    echo "<h1>Hello world!</h1>";
    echo '<h2 class="classe" attr=\'qui sono nella stringa\'>Tipi di Dato:</h2>';

    /* Booleani */
    // Vero --> true
    // Falso --> false
   
    /* Numeri */
    echo 10;
    echo "\n"; // A capo nel documento di output
    echo 1.15;

    /* Nomi delle variabili */
    $nome_variabile_; // OK
    $nomeVariabile; // OK
    $nomevariabile; //Meglio evitare tutto minuscolo

    /* Array */
    $array_1 = [1, 2, 3, 4, 5]; // Solo array senza etichette, si acccede ai valori usando l'indice
    $array_2 = array(1, 2, 3, 4, 5); // Array con chiavi per accedere ai valori
    $array_3 = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 21
    );

    echo $array_3; // Non posso stampare un array direttamente
    echo "<br/>";
    print_r($array_3);
    echo "<br/>";
    var_dump($array_3);

    //Verifica se Mario Rossi è maggiorenne
    if ($array_3["eta"] >= 18) { // questo è per maggiore o uguale, se voglio uguale uso ==
        echo "Utente maggiorenne<br/>";
    } else {
        echo "Utente minorenne<br/>";
    }

    //Verifica se Mario Rossi ha 18 anni
    if ($array_3["eta"] == 18) { 
        echo "Utente diciottenne<br/>";
    } else {
        echo "Utente non diciottenne<br/>";
    }

    // Uguaglianza stretta, controlla valore e tipo
    if ($array_3["eta"] == 21) {} // Questa condizione è vera
    if ($array_3["eta"] == "21") {} // Questa condizione è vera
    if ($array_3["eta"] === 21) {} // Questa condizione è vera
    if ($array_3["eta"] === "21") {} // Questa condizione è falsa
   
    /** Opratori logici
     * AND --> and oppure &&
     * OR  --> or oppure ||
     * XOR --> xor
     * NOT --> !
     */

    // Sintassi alternativa per PHP
    if (true and false): // equivalente a if (true && false)
        echo "condizione vera";
    else:
        echo "condizione falsa";
    endif;

    if (true or false): // equivalente a if (true || false)
        echo "condizione vera";
    else:
        echo "condizione falsa";
    endif;
    
    $voti = [6, 7, 7.5, 4, 9, 8 ];
    $somma = 0;
    $num_voti= 0;
    /** invece che fare così per tutti i voti, uso un ciclo */

    for ($i = 0; $i < count($voti); $i++) :
        if ($voti[$i] > 0 and $voti[$i] <= 10) :
        $somma = $somma + $voti[$i];
        $num_voti++;
        endif;
    endfor;

    echo "La somma dei voti è: " . $somma . "<br/>";
    echo "Il numero dei voti è: " . count($voti) . "<br/>";
    echo "Il numero dei voti validi è: " . $num_voti . "<br/>";

    $media = $somma / $num_voti;
    echo "La media dei voti è: " . $media . "<br/>";

    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];
    while (!$trovato && $i < count($valori)) :
        if ($valori[$i] == $numero) :
            $trovato = true;
            break; // interrompe il ciclo più vicino, anche in for 
        endif;
        $i++;
    endwhile;

    /** ciclo uguale con for 
        * for ($i = 0; !$trovato && $i < count($valori); $i++) :
        *     if ($valori[$i] == $numero) :
        *         $trovato = true;
        *     endif;
        * endfor;
     */

    if ($trovato) :
        echo $numero . "è presente nell'array";
    else :
        echo $numero . "non è presente nell'array";
    endif;

    /** Ciclo inverso: prima fa le istruzioni, poi verifica la condizione
     * do {
     * $istr
     * } while (cond);
     */

    /**
     * Operatori di incremento e decremento
     * $i++; prendo il valore di i, poi lo incremento di 1
     * ++$i; prima incremento di 1, poi prendo il valore di i
     * 
     * $i--;
     * --$i;
     */
?>
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
        echo $numero . "è presente nell'array <br/>";
    else :
        echo $numero . "non è presente nell'arra <br/>";
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

    $settimana = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
    for ($i = 0; $i < count($settimana); $i++) :
        switch ($settimana[$i]) :
            case "monday":
                echo "Lunedì<br/>";
                break;
            case "tuesday":
                echo "Martedì<br/>";
                break;
            case "wednesday":
                echo "Mercoledì<br/>";
                break;
            case "thursday":
                echo "Giovedì<br/>";
                break;
            case "friday":
                echo "Venerdì<br/>";
                break;
            case "saturday":
                echo "Sabato<br/>";
                break;
            case "sunday":
                echo "Domenica<br/>";
                break;
            default:
                echo "Giorno non valido<br/>";
        endswitch;
    endfor;

    /**
     * Calcola la media aritmetica dei voti
     * 
     * @param int [] $voti i voti dello studente
     * 
     * @return float La media aritmetica dei voti
     */

    function calcola_media($voti) {
        $somma = 0;
        for ($i = 0; $i < count($voti); $i++) :
            $somma += $voti[$i];
        endfor;

        $media = $somma / count($voti);
        return $media;
        }

        $studenti =  [
    array(
        "nome" => "Mario", 
        "età" => 19,
        "voti" => [3, 7, 6, 10]
    ),
    array(  
        "nome" => "Lucia",
        "età" => 14,
        "voti" => [6, 7, 8, 8]
    ),  
    array(
        "nome" => "Rosa",
        "età" => 21,
        "voti" => [6, 9, 5, 8]
    ),
    array(
        "nome" => "Francesco",
        "età" => 24,
        "voti" => [7, 9, 9, 10]
    ),
    array(
        "nome" => "Giuseppe",
        "età" => 16,
        "voti" => [6,6,9,6]
    ),
    array(
        "nome" => "Marta",
        "età" => 22,
        "voti" => [6, 5, 6, 7]
    )
];

    foreach ($studenti as $studente) :
    $media = calcola_media($studente["voti"]);
    echo $studente["nome"] . " ha una media di: " . $media . "<br/>";
    if ($media >= 6) :
        echo $studente["nome"] . " è promosso<br/>";
    else :
        echo $studente["nome"] . " è bocciato<br/>";
    endif;
    endforeach;

    // Sunday 3 August 2025
   function formatta_data($data) {
        $parti = explode(" ", $data); // divido la data in giorno, mese, anno
        $giorno_della_settimana = traduci_giorno_settimana($parti[0]);
        $giorno_del_mese = $parti[1];
        $mese = traduci_mese($parti[2]);
        $anno = $parti[3];
        return $giorno_della_settimana . " " . $giorno_del_mese . " " . $mese . " " . $anno;
    }

    echo formatta_data("Sunday 3 August 2025") . "<br/>";

   function traduci_giorno_settimana($giorno) {
        switch (strtolower($giorno)) {
            case "Sunday":
                return "Domenica";
            case "Monday":
                return "Lunedì";
            case "Tuesday":
                return "Martedì";
            case "Wednesday":
                return "Mercoledì";
            case "Thursday":
                return "Giovedì";
            case "Friday":
                return "Venerdì";
            case "Saturday":
                return "Sabato";
            default:
                return false;
        }
   }

   function traduci_mese($mese) {
        switch (strtolower($mese)) {
            case "january":
                return "Gennaio";
            case "february":
                return "Febbraio";
            case "march":
                return "Marzo";
            case "april":
                return "Aprile";
            case "may":
                return "Maggio";
            case "june":
                return "Giugno";
            case "july":
                return "Luglio";
            case "august":
                return "Agosto";
            case "september":
                return "Settembre";
            case "october":
                return "Ottobre";
            case "november":
                return "Novembre";
            case "december":
                return "Dicembre";
            default:
                return false;
        }
   }
    
?>
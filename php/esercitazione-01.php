<?php

    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;
    $somma = $a + $b;
    $differenza = $a - $b;  
    $moltiplicazione = $a * $b;
    $divisione = $a / $b;
?>
    <div>
        <h2>Esercizio 01</h2>
        <ul>
            <li><strong>Somma: </strong> <?php echo $somma; ?></li>
            <li><strong>Differenza: </strong> <?php echo $differenza; ?></li>
            <li><strong>Moltiplicazione: </strong> <?php echo $moltiplicazione; ?></li>
            <li><strong>Divisione: </strong> <?php echo $divisione; ?></li>
        </ul>
    </div>

    <?php
    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    ?>
    <div>
        <h2>Esercizio 02</h2>
        <p>
            <?php 
                $parola = "albero";
                if ($parola == "casa") {
                    echo "La parola è uguale a casa</br>";
                } else {
                    echo "La parola non è uguale a casa</br>";
                }
            ?>
        </p>
    </div>
   <?php

    /** 
     * Es 03
     * Dati due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;
    ?>
    <div>
        <h2>Esercizio 03</h2>
        <h3>Uguaglianza per valore</h3>
        <p>
            <?php 
                if ($c == $d) {
                    echo "c è uguale a d</br>";
                } else {
                    echo "c è diverso da d</br>";
                }
            ?>
        </p>
        <h3>Uguaglianza per valore e tipo</h3>
        <p>
            <?php 
                if ($c === $d) {
                    echo "c è uguale a d</br>";
                } else {
                    echo "c è diverso da d</br>";
                }
            ?>
        </p>
    </div>

    <?php
    /**
     * Es 04
     * converti il voto in un giudizio:
     * da 0 a 5 = insufficiente
     * 6 = sufficiente
     * 7 o 8 = buono
     * 9 = ottimo
     * 10 = eccellente
     */
    $voto = 11;
    ?>
    <div>
        <h2>Esercizio 04</h2>
        <p>
            <?php
            if ($voto >= 0 && $voto <= 5) {
                echo "Giudizio: Insufficiente</br>";
            } elseif ($voto == 6) {
                echo "Giudizio: Sufficiente</br>";
            } elseif ($voto == 7 || $voto == 8) {
                echo "Giudizio: Buono</br>";
            } elseif ($voto == 9) {
                echo "Giudizio: Ottimo</br>";
            } elseif ($voto == 10) {
                echo "Giudizio: Eccellente</br>";
            }
            else {
                echo "Voto non valido</br>";
            }
            ?>
        </p>
    </div>

<?php
    /*
        Descrizione
        Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
        L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
        
        Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
        Scriviamo tutto (logica e layout) in un unico file index.php

        Milestone 2
        Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

        Milestone 3 (BONUS)
        Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
        
        Milestone 4 (BONUS)
        Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
        Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
    */



    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $caratteriSpeciali = '!@#$%^&*()-_';

    // SHUFFLE SINGOLI
    $caratteriMescolati = str_shuffle($caratteri);
    $numeriMescolati = str_shuffle($numeri);
    $caratterispecialiMescolati = str_shuffle($caratteriSpeciali);

    // SHUFFLE COMPOSTI DA 2
    $caratterinumeriMescolati = str_shuffle($caratteri . $numeri);
    $caratteriEspecialiMescolati = str_shuffle($caratteri . $caratteriSpeciali);
    $numeriCaratteriSpecialiMescolati = str_shuffle($numeri . $caratteriSpeciali);

    // SHUFFLE DA 3
    $AllcaratteriMescolati = str_shuffle($numeri . $caratteriSpeciali . $caratteriMescolati);

    // LUNGHEZZA INSERITA 
    $lunghezza = $_GET["lunghezza"];

    $passwordGenerata = '';

    for($i = 0; $i < $lunghezza; $i++ ){
        $passwordGenerata .= $AllcaratteriMescolati[$i];  
    }

    // var_dump($passwordGenerata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="text-white text-center">Strong Password Generator</h1>
    <h2 class="text-white text-center">Genera una password sicura</h2>
    <div class="container">
        <div class="containerPass mb-4 mt-3 p-3 rounded">
            <?php
                echo $passwordGenerata;
            ?>
        </div>

        <div class="bg-white rounded p-3">
            <form action="index.php" method="GET">

                <div class="d-flex justify-content-between" >
                    <label for="lunghezza">Lunghezza password:</label>
                    <input type="number" id="lunghezza" name="lunghezza" min="5" max="10" >
                </div>

                <!-- <div class="d-flex justify-content-between mt-3">
                    <label for="ripetizione">Conseti ripetizioni di uno o più caratteri:</label>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="radio" id="si" name="choice" value="si">
                            <label for="si">Si</label>
                        </div>

                        <div>
                            <input type="radio" id="no" name="choice" value="no">
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div>
                        <input type="checkbox" id="lettere" name="lettere" value="lettere">
                        <label for="lettere">Lettere</label>
                    </div>

                    <div>
                        <input type="checkbox" id="numeri" name="numeri" value="numeri">
                        <label for="numeri">Numeri</label>
                    </div>

                    <div>
                        <input type="checkbox" id="simboli" name="simboli" value="simboli">
                        <label for="simboli">Simboli</label>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary mt-4">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>
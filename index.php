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


    include_once __DIR__ . '/partials/functions/function.php';

    if(isset($_GET["lunghezza"])) {
        $lunghezza = $_GET["lunghezza"];
        $passwordGenerata = generaPassword($lunghezza);
    } else {
        $passwordGenerata = "Lunghezza non specificata";
    }
    

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
            La tua password generata è:
            <span class="text-bold ms-1">
                <?php
                    echo $passwordGenerata;
                ?>
            </span>

        </div>

        <div class="bg-white rounded p-3">
            <form action="index.php" method="GET">

                <div class="d-flex justify-content-between" >
                    <label for="lunghezza">Lunghezza password:</label>
                    <input type="number" min="0" id="lunghezza" name="lunghezza" >
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <label for="ripetizione">Conseti ripetizioni di uno o più caratteri:</label>
                    <div class="d-flex flex-column">
                        <div>
                            <input type="radio" id="si" name="choice" value="1" checked>
                            <label for="si">Si</label>
                        </div>

                        <div>
                            <input type="radio" id="no" name="choice" value="0">
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
                </div>
                <button type="submit" class="btn btn-primary mt-4">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>
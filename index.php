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
            ciao ciao  ciao ciao
        </div>

        <div class="bg-white rounded p-3">
            <form action="index.php" method="GET">

                <div class="d-flex justify-content-between" >
                    <label for="lunghezza">Lunghezza password:</label>
                    <input type="number" id="lunghezza" name="lunghezza" min="1" max="10" >
                </div>

                <div class="d-flex justify-content-between mt-3">
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
                </div>
                <button type="submit" class="btn btn-primary mt-4">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>
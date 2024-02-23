<?php

$paragrafo =$_GET["paragrafo"];
$badword =$_GET["badword"];
$paroladacensurare = str_replace($badword, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="border rounded-4 border-success p-5 my-5">
            <h1 class="text-center text-white">Dati dal form</h1>

            <p class="text-white fw-bold text-center my-3"> Il paragrafo iniziale è:
                <span class="fw-normal"><?php echo $paragrafo ?></span>
            </p>

            <p class="text-success text-white fw-bold text-center">La lunghezza del paragrafo è:
                <span class="fw-normal"><?php echo strlen ($paragrafo) ?></span>
            </p>
        </div>

        <div class="border rounded-4 border-success p-5 my-3">
            <h1 class="text-center text-white pb-3">Statistiche paragrafo censurato</h1>
            
            <p class="text-white text-center mb-2 fw-bold">La parola da censurare è:
                <span class="fw-normal"><?php echo $badword ?></span>
            </p>

            <p class="text-white text-center mb-2 fw-bold">Il paragrafo censurato è:
                <span class="fw-normal"><?php echo $paroladacensurare ?></span>
            </p>

            <p class="text-white text-center mb-2 fw-bold">La lunghezza del paragrafo è:
                <span class="fw-normal"><?php echo strlen ($paroladacensurare) ?></span>
            </p>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
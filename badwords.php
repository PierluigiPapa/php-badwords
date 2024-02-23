<?php

$paragrafo=$_GET["paragrafo"];
$badword=$_GET["badword"];
$paroladacensurare= str_replace($badword, '***', $paragrafo);

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
        <div class="border rounded-4 p-5 my-5">
            <h1 class="text-center text-success">Paragrafo utente</h1>

            <p class="text-success"> Il paragrafo iniziale è:
                <?php echo $paragrafo ?>
            </p>

            <p class="text-success">La lunghezza del paragrafo è:
                <?php echo strlen ($paragrafo) ?>
            </p>
        </div>

        <div class="border-rounded-4 p-5 my-5">
            <p class="text-success text-center mb-5 fw-bold">La parola da censurare è:
                <?php echo $badword ?>
            </p>

            <p class="text-success">Il paragrafo censurato è:
                <?php echo $paroladacensurare ?>
            </p>

            <p class="text-center text-success my-3">La lunghezza del paragrafo è:
                <?php echo strlen ($paroladacensurare) ?>
            </p>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
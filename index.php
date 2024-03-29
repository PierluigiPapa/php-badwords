<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center text-success">PHP_BADWORDS</h1>
            <div class="col-6">
                <form action="badwords.php" method="GET">
                    <div>
                        <label class="text-success fw-bold fs-3 my-4" for="paragrafo">Inserisci il paragrafo:</label>
                        <textarea class="form-control mb-4 w-100 bg-success border-white" name="paragrafo" id="paragrafo" placeholder="Scrivi un paragrafo"></textarea>
                    </div>
    
                    <div>
                        <label class="text-success mb-2 fw-bold fs-3" for="paragrafo">Inserisci la parola da censurare</label>
                    </div>
    
                    <input class="mb-4 form-control bg-success border-white" id="paragrafo" type="text" name="badword" placeholder="Inserisci la parola da censurare">

                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
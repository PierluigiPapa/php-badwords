<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center">PHP_BADWORDS</h1>
            <form action="badwords.php" method="post">
                <div class="form-group">
                    <label for="paragraph">Paragrafo:</label>
                    <textarea class="form-control" name="paragraph" id="paragraph" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label for="word">Parola da censurare:</label>
                    <input type="text" class="form-control" id="word" name="word" required>
                </div>

                <button type="submit" class="btn btn-primart">Invia</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
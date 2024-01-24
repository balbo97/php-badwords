<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                PHP Badwords
                </h1>
            </div>
            <div class="col-12">

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Inserisci il tuo testo</label>
                    <textarea class="form-control" id="my-text" rows="3" required></textarea>
                </div>

            </div>
            
            <div class="col-12">
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Inserisci la parola da censurare</label>
                    <textarea class="form-control" id="censured-word" rows="3" required></textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
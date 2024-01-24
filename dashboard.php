<?php
    $testo = $_GET['text'];
    $bad_word = $_GET['bad_word'];
    $censored_text = str_replace($bad_word, '***', $testo);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Testo originale</h1>
                <p> <?php echo $testo ?></p>
                <p>Il testo originale è lungo: <?php echo strlen($testo)?></p>
            </div>
            <div class="col-12">
                <h1>Testo censurato</h1>
                <p> <?php echo $censored_text ?></p>
                <p>Il testo censurato originale è lungo: <?php echo strlen($censored_text)?></p>

            </div>
        </div>
    </div>
    
</body>
</html>
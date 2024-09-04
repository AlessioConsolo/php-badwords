<?php 
    $paragrafo = $_POST['paragrafo'];
    $parola_da_censurare = $_POST['parola_da_censurare'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
        echo "Paragrafo originale: $paragrafo";
        echo "<br>Lunghezza del paragrafo: " . strlen($paragrafo) . " caratteri";
        $paragrafo_censurato = str_replace($parola_da_censurare, "***", $paragrafo);
        echo "<br><br>Paragrafo censurato: $paragrafo_censurato";
        echo "<br>Lunghezza del paragrafo censurato: " . strlen($paragrafo_censurato) . " caratteri";
    ?>
</body>
</html>
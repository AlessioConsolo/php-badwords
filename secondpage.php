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
        
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php

    $nombres = [
            "Nico",
            "Luciano",
            "Raul",
            "Leonardo",

            ]

  ?>
    <title>Este es un titulo!</title>
</head>
<body>
HOLA MUNDO! Vamos a escribir un nombre:
<?php print $nombres[rand(0, count($nombres) -1)]



?>

</body>
</html>

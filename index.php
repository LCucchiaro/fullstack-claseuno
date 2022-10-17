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
<?php
$peliculas  =[
        ["nombre" => "Star Wars",
                    "director" => "George Lucas"],

                   [ "nombre" => "El señor de los Anillos",
                     "director" => "Peter Jackson"],

                    ["nombre" => "Dragon Ball",
                    "director" => "Masahiro Hosoda"],
]
?>

<ul>
    <?php

    foreach ($peliculas as $pelicula)
    print "<li>".$pelicula["nombre"]."</li>";

    foreach ($peliculas as $pelicula)
    print "<li>".$pelicula["director"]."</li>"
    ?>


</ul>

<?php
function filtrarPorDirector($peliculas, $nombreDelDirector) {
    foreach ($peliculas as $pelicula){
        if ($pelicula["director"]== $nombreDelDirector) {
            print "<li>". $pelicula["nombre"];
        }
    }

}
?>

<?php
filtrarPorDirector($peliculas, $nombreDelDirector);
?>

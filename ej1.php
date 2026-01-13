<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1> Ejercicios </h1>";
    echo "<h2>Ejercicio 1</h2>";

    $name = [
        "nombre" => "Sara",
        "apellido" => "Martinez",
        "edad" => 23,
        "ciudad" => "Barcelona"
    ];

    $values = array_values($name);
    foreach ($values as $i => $value) {
        echo "Dato " . ($i + 1) . "º: $value <br>";
    }
    echo "<h2>Ejercicio 2</h2>";
    foreach ($name as $x => $y) {
        echo "$x: $y <br>";
    }

    echo "<br>";
    echo "<h2>Ejercicio 3</h2>";
    $name["edad"] = 24;
    foreach ($name as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";
    echo "<h2>Ejercicio 4</h2>";
    $name = array_slice($name, 1, null, true);

    var_dump($name);
    echo "<h2>Ejercicio 5</h2>";
    $letters = "a,b,c,d,e,f";
    $array = explode(",", $letters);
    rsort($array);




    foreach ($array as $item) {
        echo $item . "<br>";
    }

    $notas = [
        "Miguel" => 5,
        "Luís" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1
    ];

    arsort($notas);
    echo "<h2>Ejercicio 6</h2>";

    foreach ($notas as $nombre => $nota) {
        echo "$nombre: $nota <br>";
    }

    echo "<h2>Ejercicio 7</h2>";

    $count = array_sum($notas);
    $averageFinal = $count / count($notas);

    echo "Media de las notas: " . number_format($averageFinal, 2) . "<br>";
    echo "Alumnos con nota por encima de la media:<br>";

    foreach ($notas as $nombre => $nota) {
        if ($nota > $averageFinal) {
            echo "$nombre: $nota <br>";
        }
    }
    echo "<h2>Ejercicio 8</h2>";
    $maxNota = 0;  // Valor inicial muy bajo
    $mejorAlumno = "";

    foreach ($notas as $nombre => $nota) {
        if ($nota > $maxNota) {
            $maxNota = $nota;
            $mejorAlumno = $nombre;
        }
    }

    echo "Mejor alumno: $mejorAlumno con nota $maxNota";
    ?>

</body>

</html>
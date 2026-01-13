<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1> Ejercicios RA3</h1>";
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
    $i = 0; // Inicializar el contador
    foreach ($name as $key => $value) {
        echo "Dato " . ($i + 1) . "º: $value <br>";
        $i++; // Incrementar el contador
    }
    echo "<br>";
    echo "<h2>Ejercicio 4</h2>";

    var_dump($name);
    echo "<h2>Ejercicio 5</h2>";
    $letters = "a,b,c,d,e,f";
    $array_letters = explode(",", $letters);
    rsort($array_letters);


    $count = count($array_letters);
    foreach ($array_letters as $index => $letter) {
        echo "letter " . ($count - $index) . "°: " . $letter . "<br>";
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
    echo "<span>Nota de los estudiantes: </span>";
    foreach ($notas as $nombre => $nota) {
        echo "$nombre: $nota ";
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
    $maxNota = 0;
    $mejorAlumno = "";

    foreach ($notas as $nombre => $nota) {
        if ($nota > $maxNota) {
            $maxNota = $nota;
            $mejorAlumno = $nombre;
        }
    }

    echo "La nota más alta es ". $maxNota . " y el mejor alumno es " . $mejorAlumno ;
    ?>

</body>

</html>
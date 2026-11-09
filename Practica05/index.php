<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer pagina web en PHP</title>
</head>
<body>
    <?php

    // Declaracion de una variable de tipo string
    $nombre="Paulina Myllely Angelyn Rodríguez Hernández";
    $carrera_estudia="T.S.U. en Desarrollo de software Multiplataforma";
    echo "<h1>Hola mundo desde PHP!</h1>";
    #Esta linea imprime la version de PHP que se esta actualizando
    echo "<h2>Estas usando la version de PHP: " .phpversion(). "</h2>";
    ?>
    <hr>

    <?php
    /**Despues de la declaracion de la variable, podemos imprimir su valor en pantalla**/
    echo "<h3>Mi nombre es: $nombre y estudio: $carrera_estudia </h3>";
    ?>

    <?php
    /*FGlobal Scope: Alcance global*/
    $x =10;
    $y =-5;
    $z ='3';

    echo"<h3>La suma de $x + $y es: " .($x+$y). "</h3>";
    echo"<h3>La suma de $x + $y +$z es: " .($x+$y+$z). "</h3>";   


    function multiplicar($a, $b)
    {
        $resultado = $a * $b;
        echo "<h3>El resultado de multiplicar $a * $b es: $resultado</h3>";
        return $resultado;
    }

    echo "<h4>El resultado de multiplicar 3*3 es: " . multiplicar(3, 3) . "</h4>";
    echo "<h4>El resultado de multiplicar $x*$z es: " . multiplicar($x, $z) . "</h4>";
    echo "<h4>El resultado de multiplicar 1225 x 325 es: " . multiplicar(1225, 325) . "</h4>";
    echo "<p>El resultado de la ultima multiplicacion es: " . multiplicar(1225, 325) . "</p>";


    /*Local Scope: Alcance estatico*/
    function myTest()
    {
        static $w = 0;
        $w++;
        echo "$w <br>";
        
    }

    myTest();
    myTest();
    myTest();
    myTest();
    myTest();

    #funcuion para saber el tipo de dato de una variable
    #var_dump() es una funcion que nos permite conocer
    #el tipo de dato de una vsriable y su valor,
    #no es necesario programarla porque ya viene imtegrada en PHP

    echo "<p> la variables <strong>nombre</strong> es de tipo: ";
    var_dump($nombre);
    echo "</p>";

    $fecha_nacimiento =date("2007/11/01");
    echo "<p> la variables <strong>fecha</strong> es de tipo: ";
    var_dump($fecha_nacimiento);
    echo "</p>";

    $fecha_hoy = date("Y/m/d");
    $edad_actual = $fecha_hoy - $fecha_nacimiento;
    echo "<p> La edad actual es: $edad_actual </p>";

    ?>
</body>
</html>
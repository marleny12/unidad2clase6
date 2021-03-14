<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
<h1>Semana 6 Trabajando con PHP</h1>
    <h2>Trabajando variables</h2>
    <?php
        //Variable globales
        //Declarar variables
        //Variable Cadena
        $soyCadena = "";
        $cadenaDos = "Hola";

        //Variable Numerica
        $numeroEntero = 1;
        $numeroDecimal = 1.5;

        //Variable Boleana
        $verdad = true;
        $falso = false;

        //Variable Caracter
        $caracter = 'A';
        $caracterVacio = '';
    ?>
    <h3>Lista de variables</h3>
    <!--Las listas en html se crean con las etiquetas ul para desordenadas y ol para ordenadas y dentro de ellas li elementos-->
    <ul>
        <li>Variable Cadena Vacia: <?php echo $soyCadena;?></li>
        <li>Variable Cadena llena: <?php echo $cadenaDos;?></li>
        <li>Variable Número Entero: <?php echo $numeroEntero;?></li>
        <li>Variable Número Decimal: <?php echo $numeroDecimal;?></li>
        <li>Variable Boleana Verdad: <?php echo $verdad;?></li>
        <li>Variable Boleana Falso: <?php echo $falso;?></li>
    </ul>

    <!--Ejemplo de una variable local-->
    <?php
        
        function myTest($numero) {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
            echo "<p>Variable numeroEntero inside function is: $numero</p>";
        }

        myTest($numeroEntero);
        // using x outside the function will generate an error
        echo "<p>Variable x cambio a numeroEntero outside function is: $numeroEntero</p>";
    ?>

    <!--Como concatenar texto y variables en php-->
    <h2>Ejemplo 1 concatenar texto</h2>
    <?php
        echo "This ", "<strong>string</strong> ", "was ", "<b>made</b> ", "with multiple parameters.";
    ?>
    <h2>Ejemplo 2 concatenar texto y variables</h2>
    <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x1 = 5;
        $y1 = 4;
        
        echo "<p>" . $txt1;
        echo "<p>" . $txt1 . "</p>";
        echo "Study PHP at " . $txt2 . " is great!</br>";
        echo $x1 + $y1 . " Esto es la suma de las 2 variables";
    ?>

    <?php
        //Variable arreglo
        $cars = array("Volvo","BMW","Toyota","Ford","Nissan");
        echo "<h2>Mostrando el contenido de una variable arreglo</h2>";
        echo "<ol><li>".$cars[0].
            "</li><li>".$cars[1].
            "</li><li>".$cars[2].
            "</li><li>".$cars[3].
            "</li><li>".$cars[4].
            "</li><ol>";
    ?>

    <h2>Operadores aritméticos PHP</h2>
    <h3>Coleccion de Ejemplos</h3>
    <table>
        <thead>
            <tr>
                <th>Operator</th>
                <th>Name</th>
                <th>Example</th>
                <th>Result</th>
                <th>Show it</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>+</td>
                <td>Addition</td>
                <td>$x + $y</td>
                <td>Sum of $x and $y</td>
                <td>$x = 10; $y = 6; echo $x + $y;</td>
            </tr>
        </tbody>
        </table>  
    

    <h2>Funciones de cadena PHP</h2>
    <br>
    <h2>strlen () - Devuelve la longitud de una cadena</h2>

    <?php
     echo strlen("Hello world!"); // outputs 12
    ?>

    <h3>str_word_count () - Contar palabras en una cadena</h3>

    <?php
    echo str_word_count("Hello world!"); // outputs 2
   ?>
 
      <h2>strrev () - Invertir una cadena</h2>

      <?php
    echo strrev("Hello world!"); // outputs !dlrow olleH
    ?>

     <h2>strpos () - Buscar un texto dentro de una cadena</h2>
      
     <?php
     echo strpos("Hello world!", "world"); // outputs 6
     ?>

     <h3>str_replace () - Reemplazar texto dentro de una cadena</h3>
     <?php
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    ?>
</body>
</html>
<html>
<head>
    <title>Ejemplo 1</title>
</head>
<body>
    <?php
    $opcion1footer="Home";
    $opcion2footer="Ejercicio Siguiente";

    $variable = "Ismael";
        echo "<h3>Esto es un titulo</h3>";
        echo "<p class='parrafo'>Esto es un ejemplo de párrafo</p><br>";
        echo 'El valor de la variable 1 es $variable <br>';
        echo "El valor de la variable 1 es $variable <br>";

        print("Hola esto es un print, los dosh somos guapos<br>");

        echo "Esto es una cadena "."y esto otra cadena"."<br>Y otra con un salto";
    ?>
    <br><br>

    <p>Bienvenido <?php
        if(isset($usuario)){
            echo "$usuario";
        } else {
            echo "No tienes un nombre asignado, GILIPOLLAS :)";
        }
        ?>
    </p>

    <br><br>
    <a href="principal.php"><?=$opcion1footer?></a><br>
    <a href="ejemplo2.php"><?=$opcion2footer?></a>
</body>
</html>
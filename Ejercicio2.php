<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body >
    <form method="POST"action="<?php $_SERVER['PHP_SELF'] ?>">
        <div style="text-align: center;">
            <h1 style="color: black;">Ingrese la Cadena</h1>
            <h3 style="color:red">Ejemplo: Suma = 23 + 10</h3>
            <input style="background-color: white; border-color:black; width:300px; border-radius: 5px;" type="text" name="cadena" required><br><br>
            <button style="background-color: white; border-color:black; border-radius: 5px;" type="submit" name="aceptar"><strong>Calcular</strong></button>
        </div>
    </form>
    <?php
        if(isset($_POST['aceptar'])){
            $cadena = $_POST['cadena'];
            echo "<h3 style = 'width: 305px; margin: 0 auto;'><strong><br>";
            echo "=========== Parte 1 ===========";
            echo "<br><br> Cadena: |";
            //Aqui se lee y se separa la cadena introducida
            for($i = 0; $i <= strlen($cadena) - 1; $i++){
                echo $cadena[$i]."|";
            }
            echo "<br> Elementos: <br>";
            $elemento = explode(" ", $cadena);
            foreach($elemento as $value) {
            echo "<strong style = 'color: red;'>".$value."</strong><br>";
            }
            echo "<br>=========== Parte 2 ===========<br><br>";
            //Aqui se asigna que tipo de dato es.
            $x = 0;
            $newCadena;
            $orden;
            while($elemento[$x] != ""){
                $tipoDato = "";
                switch ($elemento[$x]) {
                    case "+":
                        $tipoDato = " - (Operador de Suma)";
                        break;
                    case "-":
                        $tipoDato = " - (Operador de Resta)";
                        break;
                    case "*":
                        $tipoDato = " - (Operador de Multiplicación)";
                        break;
                    case "/":
                        $tipoDato = " - (Operador de División)";
                        break;
                    case "=":
                        $tipoDato = " - (Operador de Asignación)";
                        break;
                    case intval($elemento[$x]) == true:
                        $tipoDato = " - (Literal Numérica)";
                        break;
                    default:
                        $tipoDato = " - (Cadena de Texto)";
                        break;
                }
                echo "<strong style = 'color: red;'>".$elemento[$x]."</strong>".$tipoDato."<br>";
                $newCadena[] = $elemento[$x];
                $orden[] = $tipoDato;
                $ordenReal = [
                    0 => " - (Cadena de Texto)",
                    1 => " - (Operador de Asignación)",
                    2 => " - (Literal Numérica)",
                    3 => " - (Operador de Suma)" or " - (Operador de Resta)" or " - (Operador de Multiplicación)" or " - (Operador de División)",
                    4 => " - (Literal Numérica)",
                ];
                
                if(strlen(implode(" ", $newCadena)) >= strlen($cadena)){
                    //Aqui se verifica si esta escrita correctamente
                    if($orden == $ordenReal){
                        echo "<br>=========== Parte 3 ===========<br><br>";
                        echo "<strong style = 'color: green;'>Cadena Correcta</strong>"; 
                    } else{
                        echo "<br>=========== Parte 3 ===========<br><br>";
                        echo "<strong style = 'color: red;'>Cadena Incorrecta</strong>";
                    }
                    break;
                }
                $x += 1;
            }
            echo "</strong></h3>";
        }
    ?>
</body>
</html>
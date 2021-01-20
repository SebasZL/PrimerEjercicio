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
            <h1 style="color: black;">Ingrese la Operación</h1>
            <h3 style="color:red">Ejemplo: Suma = 23 + 10</h3>
            <input style="background-color: white; border-color:black; width:300px; border-radius: 5px;" type="text" name="operacion"><br><br>
            <button style="background-color: white; border-color:black; border-radius: 5px;" type="submit" name="calcular"><strong>Calcular</strong></button>
        </div>
    </form>
    
    <?php
        if (isset($_POST['calcular'])){
            $operacion = $_POST['operacion'];
            /*
            $array = explode(" ", $operacion);
            foreach($array as $key=>$value) {
                echo $key.$value."<br>";
            }
           */
            $caracteres = strlen($operacion);
            $posIgual = strpos($operacion, "=");
            $posSigno;
            if(strpos($operacion, "+") != ""){
                $posSigno = strpos($operacion, "+");
            } elseif(strpos($operacion, "-") != ""){
                $posSigno = strpos($operacion, "-");
            } elseif(strpos($operacion, "*") != ""){
                $posSigno = strpos($operacion, "*");
            } elseif(strpos($operacion, "/") != ""){
                $posSigno = strpos($operacion, "/");
            }
            $posN1 = $posIgual + 2;
            $posN2 = $posSigno + 2;
            $palabra = substr($operacion, 0, $posIgual);
            $igual = substr($operacion, $posIgual, 1);
            $carN1 = ($posSigno - $posN1) -1;
            $n1 = substr($operacion, $posN1, $carN1);
            $signo = substr($operacion, $posSigno, 1);
            $n2 = substr($operacion, $posN2);
            $salto = "<br>";
            echo "<h3 style = 'width: 305px; margin: 0 auto;'><strong>";
            echo $salto."=========== Parte 1 ===========".$salto.$salto;
            echo "Operación: <strong style = 'color: red;'>".$operacion.$salto."</strong>"; 
            echo "Elementos:".$salto;
            echo "<strong style = 'color: red;'>".$palabra.$salto;
            echo $igual.$salto;
            echo $n1.$salto;
            echo $signo.$salto;
            echo $n2.$salto."</strong>";
            echo $salto."=========== Parte 2 ===========".$salto.$salto;
            echo "Total de caracteres: <strong style = 'color: red;'>".$caracteres.$salto."</strong>";
            echo "Indentificador: <strong style = 'color: red;'>".$palabra.$salto."</strong>";
            echo "Número 1: <strong style = 'color: red;'>".$n1.$salto."</strong>";
            echo "Número 2: <strong style = 'color: red;'>".$n2.$salto."</strong>";
            echo "Operador: <strong style = 'color: red;'>".$signo.$salto."</strong>";
            $op;
            if($signo == "+"){
                $op = "suma";
            } elseif($signo == "-"){
                $op = "resta";
            } elseif($signo == "*"){
                $op = "multiplicación";
            } elseif($signo == "/"){
                $op = "división";
            }
            echo "La operación es una: <strong style = 'color: red;'>".$op.$salto."</strong>";
            $resul;
            if($signo == "+"){
                $resul = $n1 + $n2;
            } elseif($signo == "-"){
                $resul = $n1 - $n2;
            } elseif($signo == "*"){
                $resul = $n1 * $n2;
            } elseif($signo == "/"){
                $resul = $n1 / $n2;
            }
            echo "Resultado: <strong style = 'color: red;'>".$resul.$salto."</strong>";
            echo $salto."=========== Parte 3 ===========".$salto.$salto;
            echo "</strong></h3>";
            ?>  
                <h3 style = 'width: 470px; margin: 0 auto;'><strong>
                    <div style="text-align: center;">Análisis</div><br>
                    <table style="text-align: center;" border>
                        <tr>
                            <td>Elemento</td>
                            <td>Componente</td>
                            <td>Secuencia</td>
                        </tr>
                        <tr>
                            <td><?php echo "<strong style = 'color: red;'>".$palabra.$salto;?></td>
                            <td>Indentificador</td>
                            <td>Cadena de caracteres(variable)</td>
                        </tr>
                        <tr>
                            <td><?php echo "<strong style = 'color: red;'>".$igual.$salto;?></td>
                            <td>Asignación</td>
                            <td>Operador de asignación</td>
                        </tr>
                        <tr>
                            <td><?php echo "<strong style = 'color: red;'>".$n1.$salto;?></td>
                            <td>Número</td>
                            <td>Literal númerica</td>
                        </tr>
                        <tr>
                            <td><?php echo "<strong style = 'color: red;'>".$n2.$salto;?></td>
                            <td>Número</td>
                            <td>Literal númerica</td>
                        </tr>
                        <tr>
                            <td><?php echo "<strong style = 'color: red;'>".$signo.$salto;?></td>
                            <td>Operación</td>
                            <td>Operador aritmético</td>
                        </tr>
                    </table>
                </strong></h3><br>
            <?php
        }
        ?>
</body>
</html>
<?php 
    //Ejercicio 4
    $variableA = 3;
    $variableB = 4;
    $variableC = $variableA + $variableB;

    //Ejercicio 5
    $p1 = 3;
    $p2 = $p1 * 3;
    //$p3 = ($p1 + $p2)/4;

    //Ejercicio 6
    // if($p2 > 5){
    //     $numero = 4;
    //     $p3 = ($p1 + $p2)/$numero;
    //     //Ejercicio 7
    // }elseif($p2 == 5){
    //     $numero= "?";
    //     $p3 = $p1 + $p2;

    // }else{
    //     $numero = 8;
    //     $p3 = ($p1 + $p2)/$numero;
    // }

    //Ejercicio 8
    // switch ($p2) {
    //     case 0:
    //     case 1:
    //     case 2:
    //     case 3:
    //     case 4:
    //         echo "Es menor a 5";
    //         $numero = 4;
    //         $p3 = ($p1 + $p2)/$numero;
    //         break;
    //     case 5:
    //         echo "Es igual a 5";
    //         $numero = "?";
    //         $p3 = ($p1 + $p2)/$numero;
    //         break;
    //     default:
    //         echo "Es mayor a 5";
    //         $numero = 8;
    //         $p3 = ($p1 + $p2)/$numero;
    // }
    
    

    echo "
    <html>
        <head>
            <!-- Ejercicio 1 -->
            <title>Ejercicio 1</title>
        </head>
        <body>
            <!-- Ejercicio 2 -->
            <h3>Mi primera página PHP</h3>
            <!-- Ejercicio 3 -->
            <p>Página de pruebas de PHP</p>
            <!-- Ejercicio 4 -->
            Variable A es: $variableA<br>
            Variable B es: $variableB<br>
            Variable C = VariableA + VariableB<br>
            El resultado de la suma es = $variableC<br><br>
            <!-- Ejercicio 5 -->
            Variable P1: $p1<br>
            Variable P2 (p1 * 3) : $p2<br>
            Variable P3 ((p1 + p2)/$numero): $p3<br><br>

        </body>
    </html>" ;
    //Ejercicio 9
    echo "Tabla de multiplicar<br>";
    for($i = 1;$i<10;$i++){
        
        $resultado = ($i * $p1);
        
        echo "$i * $p1 = $resultado <br>";
    }

    //Ejercicio 10
    $i2 = 1;
    echo "<br><br>Division<br>";
    while($i2 < 10){
        $resultado2 =($p2 / $i2);
        echo "$p2 : $i2 = $resultado2 <br>";
        $i2++;
    }
    
    echo "<br>";

    //Ejercicio 11
    $valor = 0;
    $contador = 0;
    $frutas = array("Manzana","Pera","Plátano","Kiwi","Mandarina","Naranja","Melocoton","Sandia","Cerezas","Peras","Fresas","Uvas");
    foreach($frutas as $valor){
        echo "Fruta Nº $contador: $valor <br>";
        $valor++;
        $contador++;
    }
?>
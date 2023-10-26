<!DOCTYPE html>
<html>

<body>

    <h1>My first PHP page</h1>

    <?php
    /*
    $x = 17;
    $y = 16;
    echo "$x + $y = ", $x + $y;
    */

    /*
    $radi = 8;
    echo "L'àrea d'un cercle de radi $radi cm es= ", pi() * $radi**2, "cm";
    */
    /*
    $celsius = 33;
    $fahrenheit = ($celsius * 1.8) + 32;
    echo "$celsius ºC equivalen a $fahrenheit ªF";
    */
    /*
    $num1 = 33;
    $num2 =10;

    if ($num1 > $num2){
        echo "$num1 es mayor que $num2.";
    }else {
        echo "$num2 es mayor que $num2";
    }
    */
    /*
    $entrades = 10;
    if ($entrades < 5){
        echo "El preu total es: ", $entrades*5,"€.";
    }elseif ($entrades >=5 and $entrades <10){
        echo "El preu total es: ", $entrades*4,"€.";
    }else{
        echo "El preu total es: ", $entrades*3,"€.";
    }*/
    /*
    $edat = 17;
    if($edat<18){
        echo "Aquesta persona es menor d'edat.";
    }else{
        echo"Aquesta persona es adulta.";
    }*/

    
    $objectiu = 33;
    $total = 100;
    $meitad = $total / 2;
    $i = 0;
    if ($objectiu > $meitad) {
        for ($i = $meitad; $i != $objectiu; $i++) {
            $resultat = $i;
        }
        echo $i, " és l'objectiu.";
    } elseif ($objectiu == $meitad) {
        echo $meitad, " és l'objectiu.";
    } else {
        for ($i = 1; $i != $objectiu; $i++) {
            $resultat = $i;
        }
        echo $i, " és l'objectiu.";
    }

    /*
    for ($i = 100; $i > 0; $i--) {
        echo $i,"<br>";
    }*/


    ?>
</body>

</html>
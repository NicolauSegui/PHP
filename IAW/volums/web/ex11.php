<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 11 - PHP bàsic.</h1>
    <ul>
        <?php
        $num1 = 2;
        $num2 = 100;
            for($i = $num1; $i <= $num2; $i++) {
                if($i %3 == 0) {
                    echo "<li> $i </li>";
                }
            }
        ?>
    </ul>
</body>

</html>
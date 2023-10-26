<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 13 - PHP bàsic.</h1>
        <?php
        for($multiplicador = 1; $multiplicador < 11; $multiplicador++) {
            echo "<table border='black'>";
            echo "<th>Taula de multiplicar del ", $multiplicador,"</th>";
            for($i = 1; $i < 11; $i++) {
                echo "<tr>";
                echo "<td> $multiplicador * $i = ", $multiplicador*$i , "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
        }
        ?>
</body>

</html>
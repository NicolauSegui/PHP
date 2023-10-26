<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 12 - PHP bàsic.</h1>
    <table border="black">
        <th>taula de multiplicar del 8</th>
        <?php
        $num = 8;
            for($i = 1; $i < 11; $i++) {
                echo "<tr>";
                echo "<td> $i * $num = ", $i*$num , "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>

</html>
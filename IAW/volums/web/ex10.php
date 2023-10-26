<!DOCTYPE html>
<html>

<body>

    <h1>Exercici 10 - PHP bàsic.</h1>
    <table border="black">
        <th>Nombres imparells del 1 al 20</th>
        <?php
            for($i = 1; $i < 21; $i++) {
                if($i %2 !== 0) {
                    echo "<tr>";
                    echo "<td> $i </td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>

</html>
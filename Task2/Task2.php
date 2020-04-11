<html>
<head>
    <title>
        Таблица умножения
    </title>
    <link rel="stylesheet" href="style.css"/>
</head>
    <body>
        <table cellspacing="0">
            <?php
                $n = 10;
                echo "<tr><td></td>";
                for ($i = 1; $i < $n + 1; $i++)
                {
                    echo "<td>$i</td>";
                }
                echo "</tr>";
                for ($i = 1; $i < $n +1; $i++)
                {
                    echo "<tr><td>$i</td>";
                    for ($j = 1; $j < $n + 1; $j++)
                    {
                        echo "<td>$i * $j</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>

</html>
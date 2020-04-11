<!DOCTYPE HTML>
<html>
<head>
    <title>
        Таблица умножения
    </title>
    <link rel="stylesheet" href="style.css"/>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<table cellspacing="0">
    <?php
    $n = 10;
    echo "<tr><td class='first'></td>";
    for ($i = 1; $i < $n + 1; $i++)
    {
        echo "<td class='first-line'>$i</td>";
    }
    echo "</tr>";
    for ($i = 1; $i < $n + 1; $i++)
    {
        echo "<tr><td>$i</td>";
        for ($j = 1; $j < $n + 1; $j++)
        {
            $res = $i * $j;
            if ($i == $j)
                echo "<td class='diagonal'>$res</td>";
            else
            {
                echo '<td>'.$res.'</td>';
            }

        }
        echo "</tr>";
    }
    ?>
</table>
</body>

</html>
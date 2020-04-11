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
    function mulTable($x = 10, $y = 10)
    {

        $out = "<table>"."<tr><td></td>";
        for ($i = 1; $i < $y + 1; $i++)
        {
            $out = $out."<td class='first-line'>$i</td>";
        }
        $out = $out."</tr>";
        for ($i = 1; $i < $x + 1; $i++)
        {
            $out = $out."<tr><td>$i</td>";
            for ($j = 1; $j < $y + 1; $j++)
            {
                $res = $i * $j;
                if ($i == $j)
                    $out = $out."<td class='diagonal'>$res</td>";
                else
                {
                    $out = $out.'<td>'.$res.'</td>';
                }

            }
            $out = $out."</tr>";
        }
        $out = $out."</table>";
        return $out;
    }
    echo mulTable(10, 10 );
    ?>
</table>
</body>

</html>
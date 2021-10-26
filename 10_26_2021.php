<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style4.css">
    <title>Użytkownicy</title>
</head>
<body>
    <?php
        $conect = new mysqli("localhost", "root", "", "4dgr1_dane1");
        $sql = "SELECT * FROM `user`";

        $resultat = $conect->query($sql);
        print_r($resultat);
        echo "<br> <hr>";
        echo "<table>";
        echo <<< TABLE
            <tr>
                <th>Id</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Urodziny</th>
                <th>Wzrost</th>
            </tr>
        TABLE;

        while ($rows = $resultat->fetch_assoc()) {
            if ($rows['height']!=NULL) {
                $height=$rows['height'].'cm';
            }
            else{
                $height="-";
            };
            //print_r($rows);
            echo <<< L
                <tr>
                    <td>$rows[id]</td>
                    <td>$rows[name]</td>
                    <td>$rows[surname]</td>
                    <td>$rows[birthday]</td>
                    <td>$rows[height]cm</td>
                </tr>
            L;
            echo "<br> ";
        }
        echo "</table>";
    ?>
</body>
</html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Użytkownicy</title>
</head>
<body>
    <?php
        $conect = new mysqli("localhost", "root", "", "4dg1_baza1");
        $sql = "SELECT * FROM `user`";

        $resultat = $conect->query($sql);
        print_r($resultat);
        echo "<br> <hr>";

        while ($rows = $resultat->fetch_assoc()) {
            if ($rows['hight']!=NULL) {
                $hight=$rows['hight'].'cm';
            }
            else{
                $hight="-";
            };
            //print_r($rows);
            echo <<< L
                ID: $rows[id], Imię: $rows[name], Nazwisko: $rows[surname], Urodziny: $rows[birthday], Wzrost: $rows[hight]cm
                <br> <hr>
            L;
            echo "<br> ";
        }
    ?>
</body>
</html>
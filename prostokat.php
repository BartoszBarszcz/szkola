<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h3>Prostokat</h3>
    <form method="post">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br>
      <input type="text" name="sideB" placeholder="Podaj bok b"><br>
      <input type="submit" value="Oblicz">
    </form>
</body>
<?php
  if (!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
    $area=$_POST['sideA']*$_POST['sideB'];
    $circuit=(2*$_POST['sideA'])+(2*$_POST['sideB']);
    echo <<< RESULT
    Pole prostokątu wynosi: $area cm<sup>2</sup><br>
    Obwód prostokątu wynosi: $circuit cm
    RESULT;
  }else {
    echo "Wypełnij długość boku!";
  }


?>

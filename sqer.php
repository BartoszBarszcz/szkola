<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h3>KWADRAT</h3>
    <form method="post">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br>
      <input type="submit" value="Oblicz">
    </form>
</body>
<?php
  if (!empty($_POST['sideA'])) {
    $sideA=str_replace( ',', '.', $_POST['sideA']);
    echo $sideA;
    $area=pow($_POST['sideA'], 2);
    $circuit=4*$_POST['sideA'];
    echo <<< RESULT
    Pole kwadrau wynosi: $area cm<sup>2</sup><br>
    Obwód kwadratu wynosi: $circuit cm
    RESULT;
  }else {
    echo "Wypełnij długość boku!";
  }


?>

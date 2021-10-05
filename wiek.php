<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
</head>
<body>

    <?php
    if (!isset($_POST['person'])&& !isset($_POST['buttonAge'])) {
      echo <<< FORMUCOUNTERPERSON
      <h3> Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób">
        <input type="submit" value="zatwierdź">
      </form>
FORMUCOUNTERPERSON;
    }
    ?>

<?php
    if (!empty($_POST['person'])) {
      echo "<h3> Ilość osób w rodzinie: $_POST[person]</h3>";
      echo <<< FORMUAPAGEPERSON
        <form method="post">
      FORMUAPAGEPERSON;
      $count=$_POST['person'];
      for($i=1;$i<=$count; $i++)
      {
        echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>";
      }
      echo <<< FORMUAPAGEPERSON
        <input type="submit" name="buttonAge" value="Oblicz">
        </form>
      FORMUAPAGEPERSON;
    }
    if (isset($_POST['buttonAge'])) {
      //print_r($_POST);
      $avg=0;
      $count=0;
      foreach ($_POST as $key => $value) {
        // echo "$key: $value<br><br>"
        if ($key != 'buttonAge') {
          $avg+=$value;
          $count++;
        }
      }
      echo "średni wiek".$avg/$count;
    }

?>
</body>

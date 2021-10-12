<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane użytkownika</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="name" placeholder="imię"><br>
      <input type="text" name="surname" placeholder="nazwisko"><br>
      <input type="submit" name="button" value="Zatwierdź">
    </form>
    <?php
    if (isset($_POST['button'])) {
      //print_r($_POST);
      require_once './function.php';
      test($_POST['name']." ".$_POST['surname'], 12);
    }

     ?>
  </body>
</html>

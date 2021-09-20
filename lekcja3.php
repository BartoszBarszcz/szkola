<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
</head>
<body>
    <h3> Dane Użytkownika</h3>
    <form>
        <input type="text" name="name" placeholder="imię"><br><br>
        <input type="text" name="surname" placeholder="nazwisko"><br><br>
        <input type="submit" value="wypełnij wszystkie dane">

</form>
<?php
if (!empty($_GET["name"]) && !empty($_GET["surname"])) {
  echo <<< L
   Imię i nazwisko: $_GET[name] $_GET[surname]
   L;
} else {
  echo "Wypełnij wszystkie dane!!";
}


?>
</body>

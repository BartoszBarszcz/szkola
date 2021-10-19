<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //date()
    echo "dzień-miesiąc-rok: ".date('d-m-Y'),'r.<br>';
    echo "miesiąc-dzień-rok: ".date('m-d-y'),'r.<br>';
    echo "dzień-miesiąc-rok: ".date('d-M-Y'),'r.<br>';
    echo "dzień-miesiąc-rok: ".date('d-F-Y'),'r.<br>';//19-October-2021r.

    setlocale(LC_ALL, 'PL');
    echo strftime('%d %B %Y').'<br>';

    echo date('G:i:s').'<br>';

     ?>

     <script>
       setTimeout(function()
       {
         window.location.reload();
       },1000);
     </script>
     <?php
     echo date('H:i:s').'<br>';
      echo date('H:i:sa').'<br>';//am

      //getdate
      $date=getdate();
      echo $date; //warring
      echo "<pre>";
        print_r($date);
      echo "</pre>";

      echo $date['wday']; //2
      echo $date['yday']; //291

      //rok przestepny
      echo date("L"); // 0 - rok nie jest przestępny
      echo '<br>';
      //mktime

      $today= mktime(0, 0, 0, date("m"), date("d"), date("Y"));

      // echo $today'<br>';
      $year=$today/(60*60*24*365);
      echo (int)$year;
      ?>
  </body>
</html>

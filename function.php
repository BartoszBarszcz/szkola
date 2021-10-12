<?php
  function test($name, $chars)
  {
    //-białe znaki (trim)
    $przyciete=trim($name);
    //-1 litera duża ucwords
    $pd=ucwords($przyciete);
    //ucfirst($_POST['name']);
    //-ilosc znakówarning substr
    $ilosc=substr($pd,0,$chars);
    echo $ilosc;

  }

 ?>

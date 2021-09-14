<?php
echo "PHP_VERSION<br>";
echo "2**10<br>";

$x = 100;
$y = 10;

echo $x<=>$y;
echo "<br>";

$v = 1;
$b = 1.0;

if ($v==$b){
  echo "równe<br>";
}else {
  echo "różne<br>";
}

if ($v==$b){
  echo "identyczne <br>";
}else {
  echo "różne<br>";
}
echo gettype($v);
echo gettype($b);

$x=10;
echo $x;
$x=$x++;
echo $x;
$x=++$x;
echo $x;

//zadanie 1
$x = 1;
echo $x; //1
$x = $x++;
echo $x;//1
$x=++$x;
echo $x;//2
$y=++$x;
echo $y;//3
echo $x;//3
$y=$x++;
echo $x;//4
echo $y;//4

 ?>

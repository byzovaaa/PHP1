
<?php
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true?  TRUE, ПОТОМУ ЧТО БУЛЕВ., ЗНАЧ СРАВНИВАЕТ ЗНАЧЕНИЯ, НО НЕ ТИП ДАННЫХ
var_dump((int)'012345');                        // Почему 12345? ПРИВЕДЕНИЕ  К ЧИСЛУ, ПОЭТОМУ  12345
var_dump((float)123.0 === (int)123.0); // Почему false? сравниваются и значения и тип данных. Поэтому FALSE
var_dump((int)0 === (int)'hello, world'); // Почему true? ТАК КАК сСТРОКА НЕ НОЛЬ, значит ее значение - TRUE.
?>









<?php //Второе задание

  $a = 1;
  $b = 2;
  
  $a = $b + $a; // $a = 3
  $b = $a - $b; //$b = 1
  $a = $a - $b //$a = 2
  
  echo $a;
  echo $b;
  
  ?>


<?php //  первое задание
$h1 = 'H1';
$title = 'Title';
$year = date('Y');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1><?php echo $h1 ?></h1>
   <span><?php echo $year ?></span>
</body>
</html>
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?  потому что == сравнение, не сравнивает тип данных
    var_dump((int)'012345');     // Почему 12345? числа с обозначением 'int' будут начинаться с 1
    var_dump((float)123.0 === (int)123.0); // Почему false? float-относится к дробным числам, int-к целым числам следовательно false
    var_dump((int)0 === (int)'hello, world'); // Почему true? строка не ноль, значит ее значение - true.
?>


<?php

  $a = 1;
  $b = 2;

  $a = $b + $a;
  $b = $a - $b;
  $a = $a - $b;

  echo $a;
  echo $b;

?>

<?php
$h1 = 'H1';
$title = 'Title';
$year = date('Y');
?>

    <html>

    <head>
        <title>
            <?php echo $title; ?>
        </title>
    </head>

    <body>
        <h1><?php echo $h1; ?></h1>
        <span><$php echo $year; ?></span>
    </body>

    </html>

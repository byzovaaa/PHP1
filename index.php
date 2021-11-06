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

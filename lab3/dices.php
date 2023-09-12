<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Rolling</title>
</head>
<body> 
    <?php 
      function dice($score = FALSE ) {
        $d1 = rand(1, 6);
        $d2 = rand(1, 6);
        return '2 Dices roll '
        .($score ? ' => '.$d1. ' + '.$d2 : '' )
        . ' => ผลรวมคือ '.$d1+$d2;
      }
    ?>
    <h1>without score</h1>
    <?php  echo dice(); ?>
    <h1>with score</h1> 
    <?php  echo dice(TRUE); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <style>
        * {
           box-sizing: border-box;  
        }
        table {
            border-spacing: 0;
            border: 1px solid black;
        }
        td {
          width: 50px;
          height: 50px;
        }
        .black {
            background-color: black;
        }
    </style>
</head>
<body>
   <table>
<?php
    for ($i = 0; $i <8; $i++) {
?>
    <tr>
<?php
    for ($j = 0; $j <8; $j++) {
        if (($i + $j) % 2 == 0) {
         echo '<td class="black" ></td>';
        } else {
         echo '<td></td>';
        }
    }
?>
    <tr>
<?php
    }
?>
   </table> 
</body>
</html>
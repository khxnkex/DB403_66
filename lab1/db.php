<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Northwind Categories</h1>
  <ul>
    <?php
    $mysqli = new mysqli('db403-mysql', 'root', 'P@ssw0rd', 'northwind');
    $sql = 'select * from categories';
    $result = $mysqli->query($sql);
    while($row = $result->fetch_assoc()) {
    echo '<li>'.$row['CategoryName'].'</li>';
  }
  ?>
</ul>
</body>
</html>
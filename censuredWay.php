<?php
$yourText = $_GET["yourText"];
var_dump($yourText);
$censuredWord = $_GET["censuredWord"];
var_dump($censuredWord);

$censuredText = str_replace($censuredWord,"***",$yourText);
var_dump($censuredText);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testo censurato</title>
</head>
<body>
  
</body>
</html>
<?php
$yourText = $_GET["yourText"];
$censuredWord = $_GET["censuredWord"];

$censuredText = str_replace($censuredWord,"***",$yourText);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testo censurato</title>
  
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>Il testo originale era:</h2>
    <p><?= $yourText ?></p>
    <h2>Il testo censurato è:</h2>
    <p><?= $censuredText ?></p>
  </div>
</body>
</html>
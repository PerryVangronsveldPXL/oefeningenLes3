<?php
require_once('wiskunde.php');

$getal = $_POST['getal'];

if ($getal < 0 || !ctype_digit($getal)) {
    $output = "Not a valid number.";
} else {
    $output = faculteit($getal);
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
<h1><?php
    print($output); ?></h1>
</body>
</html>

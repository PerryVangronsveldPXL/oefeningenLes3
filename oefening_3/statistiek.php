<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiek</title>
</head>
<body>
<?php
$numbers = $_GET['getallen'];
$sum = 0;
$validNumbers = array();
$invalidNumbers = array();
foreach ($numbers as $number) {
    if (is_numeric($number)) {
        $sum += $number;
        $validNumbers[] = $number;
    } else {
        $invalidNumbers[] = $number;
    }
}
$average = $sum / count($validNumbers);
$min = min($validNumbers);
$max = max($validNumbers);
?>

<form>
    Minimum: <input type="text" name="minNumber" value="<?php print ($min) ?>"/><br>
    Maximum: <input type="text" name="maxNumber" value="<?php print ($max) ?>"/><br>
    Average: <input type="text" name="average" value="<?php print ($average) ?>"><br>
    Invalid numbers:<br>
    <?php foreach ($invalidNumbers as $number) {
        ?> <input type="text" value="<?php print ($number) ?>"/><br>
    <?php } ?>
    </ul>
</form>
</body>
</html>
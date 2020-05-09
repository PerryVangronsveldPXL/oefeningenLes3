<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Getallen</title>
</head>
<body>
<form action="statistiek.php">
    <?php
    $aantal = $_GET['aantal'];
    if (!ctype_digit($aantal) || $aantal <= 0) {
        header("Location: ingave.html");
    } else {
        for ($i = 1; $i <= $_GET['aantal']; $i++) { ?>
            <input type="text" name="getallen[]"/>
        <?php }
    } ?>
    <input type="submit">
    <input type="hidden" name="aantal" value="<?php print ($_GET['aantal']); ?>">
</form>
</body>
</html>
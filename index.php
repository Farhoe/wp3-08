<?php

require_once("functions.php");

$submit=filter_input(INPUT_POST, 'submit');
$coins=filter_input(INPUT_POST, 'coins');
if (isset($submit)) {
    $coins=filter_input(INPUT_POST, 'coins');
    if (prepareCoffee($coins)) {
        echo "Coffee is ready!";
    } else {
        echo "You don't have enough money!";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od Matky</title>
</head>
<body>
    <h1>Kaféééééééééé :)))))1))))</h1>

    <p>V automatu je právě: <?php echo file_get_contents('machineCoins.txt');?>,-</p>
    <p>V automatu je vody: <?php echo file_get_contents('machineWater.txt'); ?> litrů</p>

    <form action="index.php" method="post">
        <input type="number" name="coins" placeholder="25"> <br>
        <input type="submit" value="odeslat" name="submit">
    </form>
</body>
</html>
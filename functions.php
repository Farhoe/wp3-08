<?php
function prepareCoffee($coins)
{
    $latte=25;
    $latteWater=0.2;
    $machineWater=file_get_contents('machineWater.txt');
    if (($latte<=$coins) && ($machineWater>=$latteWater)) {
        $machinecoins = (int) file_get_contents("machineCoins.txt");
        $machinecoins+= $latte;
        file_put_contents('machineCoins.txt', $machinecoins);
        $machineWater-= $latteWater;
        file_put_contents("machineWater.txt", $machineWater);
        
        return true;
    }

    return false;
}

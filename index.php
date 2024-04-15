<?php

$partite = array(
    array("casa" => "Olimpia Milano", "ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60),
    array("casa" => "Virtus Bologna", "ospite" => "Varese", "punti_casa" => 70, "punti_ospite" => 65),
    array("casa" => "Fortitudo Bologna", "ospite" => "Reggiana", "punti_casa" => 80, "punti_ospite" => 75)
);

foreach ($partite as $partita) {
    echo $partita['casa'] . " - " . $partita['ospite'] . " | " . $partita['punti_casa'] . "-" . $partita['punti_ospite'] . "<br>";
}

?>
<?php
include 'asia.php';
include '../Channels/a-sports.php';
include '../Channels/ptv.php';
include '../Channels/ten.php';
include '../Channels/star-sports.php';
$Cricket = '['. $ASIA . ',' . $PTV . ',' . $A . ',' . $TEN . ',' . $Star_Sports  . ']';
file_put_contents('Cricket.json', $Cricket);
echo $Cricket;
?>
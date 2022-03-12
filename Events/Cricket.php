<?php
include 'psl.php';
include 'ind.php';
include 'pak.php';
include 't20-wo.php';
include '../Channels/a-sports.php';
include '../Channels/ptv.php';
include '../Channels/ten.php';
include '../Channels/star-sports.php';
include '../Channels/Cricket.php';
$Cricket = '[' . $PAK . ',' . $IND . ',' . $T20_Wo . ',' . $PTV . ',' . $A . ',' . $TEN . ',' . $Star_Sports  . ']';
file_put_contents('Cricket.json', $Cricket);
echo $Cricket;
?>
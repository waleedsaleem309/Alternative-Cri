<?php
include '../Channels/a-sports.php';
include '../Channels/ptv.php';
include '../Channels/ten.php';
include '../Channels/sky.php';
include '../Channels/super.php';
include '../Channels/willow.php';
include '../Channels/star-sports.php';
include 'worldcup.php';
$Cricket = '[
{
    "events" : [' . $World . $PTV . ','  . $TEN . ',' . $Star_Sports . ',' . $Sky . ','. $Super . ',' . $Willow
    .'],
    "title" : "Cricket"
    }
]';
file_put_contents('Cricket.json', $Cricket);

echo $Cricket;
?>
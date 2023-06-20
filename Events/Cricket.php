<?php
include '../Channels/a-sports.php';
include '../Channels/ptv.php';
include '../Channels/ten.php';
include '../Channels/sky.php';
include '../Channels/super.php';
include '../Channels/willow.php';
include '../Channels/star-sports.php';
include 'pak-nz.php';
include 'ipl.php';
$Cricket = '[
{
    "events" : ['. $IPL0 . $PAK . $PTV . ','  . $TEN . ',' . $Star_Sports . ',' . $Sky . ',' . $Willow
    .'],
    "title" : "Cricket"
    }
]';
file_put_contents('Cricket.json', $Cricket);

echo $Cricket;
?>
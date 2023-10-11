<?php
include '../Events/worldcup.php';


$json = 'ptv.json';
$PTV = '{
    "Name": "PTV Sports",
    "Url": "https://bighra.crik.live/Channels/ptv-sports.json",
    "ImageUrl": "https://asset.crik.live/Channels/PTV-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "PTV Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }';
    $PTV1 = '[
    { 
"events": [ 
            '. $World . $PTV .   '
    ],
    "title": "PTV Sports"
    }
]';




           file_put_contents($json, $PTV1);

?>

<?php
include 'asia-cup.php';
$json = 'ptv.json';
$PTV = '{ 
"events": [ 
{
    "Name": "PTV Sports",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/PTV-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "PTV Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "PTV Sports"
    }';
    $PTV1 = '{ 
"events": [ 
' . $Asia .  ' 
,{
    "Name": "PTV Sports",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/PTV-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "PTV Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }' .   '
    ],
    "title": "PTV Sports"
    }';
    //   echo $A1;
        $PTV2 = '[' . $PTV1 .']';
           file_put_contents($json, $PTV2);
        // header("Location: https://crik.live/Channels/" . $json);

?>

<?php
$json = 'a-sports.json';
include 'psl.php';
include 'pak.php';
$A = '{ 
"events": [ 
{
    "Name": "A Sports",
    "Url": "https://bighra.crik.live/Channels/a-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/a-sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "A Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "A Sports"
    }';
    $A1 = '{ 
"events": [ ' . $PAK   .
',{
    "Name": "A Sports",
    "Url": "https://bighra.crik.live/Channels/a-sports.json",
    "ImageUrl": "https://assets.crik.live/Channels/a-sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "A Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }'  .   '
    ],
    "title": "A Sports"
    }';
    //   echo $A1;
   
        $A2 = '[' . $A1 . ']';
            file_put_contents($json, $A2);
        // header("Location: https://crik.live/Channels/" . $json);
?>

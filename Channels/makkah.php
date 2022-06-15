<?php
$json = 'makkah.json';

$Makkah = '{ 
"events": [ 
{
    "Name": "Makkah Live",
    "Url": "https://bighra.crik.live/Channels/makkah.json",
    "ImageUrl": "https://assets.crik.live/Channels/makkah.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Makkah",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Madina Live",
    "Url": "https://bighra.crik.live/Channels/makkah.json",
    "ImageUrl": "https://assets.crik.live/Channels/madina.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Madina",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "Makkah"
    }';
   

        $Makkah2 = '[' . $Makkah . ']';
            file_put_contents($json, $Makkah2);
        // header("Location: https://crik.live/Channels/" . $json);
?>

<?php
$json = 'star-sports.json';
include 'asia-cup.php';
$Star_Sports = '{ 
"events": [ 

{
    "Name": "Star Sports",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star-hindi.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports Hindi",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
    ],
    "title": "Star Sports"
    }';
        $Star_Sports1 = '{ 
"events": [ ' . $Asia .
'
   ,{
    "Name": "Star Sports",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.crik.live/Channels/star.json",
    "ImageUrl": "https://assets.crik.live/Channels/star-hindi.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports Hindi",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }' .    '
    ],
    "title": "Star Sports"
    }';
    //   echo $A1;
    $Star_Sports2 = '[' . $Star_Sports1 . ']';
      file_put_contents($json, $Star_Sports2);
      file_put_contents('star.json',$Star_Sports2);
        // header("Location: https://crik.live/Channels/" . $json);
?>

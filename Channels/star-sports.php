<?php
include 'u19.php';
include 'psl.php';
$json = 'star-sports.json';
$Star_Sports = '{ 
"events": [ 

{
    "Name": "Star Sports",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.tk/Channels.json",
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
"events": [ ' . $PSL .',' .
'
{
    "Name": "IND vs SL",
    "Url": "https://bighra.tk/Events/ind-sl.json",
    "ImageUrl": "https://assets.crik.live/Events/ind-sl.jpg",
    "startDate": "2022-2-24",
    "startTime": "12:00",
    "EventName": "IND vs SL",
    "endDate": "2022-2-25",
    "endTime": "12:00"
    },
    {
    "Name": "IND vs SL",
    "Url": "https://bighra.tk/Events/ind-sl.json",
    "ImageUrl": "https://assets.crik.live/Events/ind-sl.jpg",
    "startDate": "2022-2-26",
    "startTime": "12:00",
    "EventName": "IND vs SL",
    "endDate": "2022-2-27",
    "endTime": "12:00"
    },
      {
    "Name": "IND vs SL",
    "Url": "https://bighra.tk/Events/ind-sl.json",
    "ImageUrl": "https://assets.crik.live/Events/ind-sl.jpg",
    "startDate": "2022-2-27",
    "startTime": "12:00",
    "EventName": "IND vs SL",
    "endDate": "2022-2-28",
    "endTime": "12:00"
    },
   {
    "Name": "Star Sports",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/star-hindi.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports Hindi",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },' . $u19 .   '
    ],
    "title": "Star Sports"
    }';
    //   echo $A1;
    $Star_Sports2 = '[' . $Star_Sports1 . ']';
      file_put_contents($json, $Star_Sports2);
        // header("Location: https://crik.live/Channels/" . $json);
?>

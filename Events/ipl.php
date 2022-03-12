<?php
$IPL =  '{    
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
"title": "IPL"
  }';
  $IPL1 = '[' . $IPL . ']';
    file_put_contents('ipl.json', $IPL1);
?>


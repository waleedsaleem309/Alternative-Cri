<?php
$U19 = '{    
    "events": [
      {
    "Name": "Pakistan U19 vs Zimbabwe U19",
    "Url": "https://bighra.tk/Events/u19.json",
    "ImageUrl": "https://assets.crik.live/Events/u19/24.jpg",
    "startDate": "2022-1-22",
    "startTime": "00:00",
    "EventName": "U19",
    "endDate": "2022-1-23",
    "endTime": "00:00"
      },
      {
    "Name": "U19 World Cup",
    "Url": "https://bighra.tk/Events/u19.json",
    "ImageUrl": "https://assets.crik.live/Events/u19.jpg",
    "startDate": "2022-1-22",
    "startTime": "00:00",
    "EventName": "U19",
    "endDate": "2022-2-15",
    "endTime": "00:00"
      }
    ],
"title": "U19"
  }';
  $U = '[' . $U19 . ']' ;
  file_put_contents('u19.json', $U);
?>
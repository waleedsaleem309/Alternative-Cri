<?php
$json = 'ad-sports.json';
$AD_Sports = '[
        {    
    "events": [
      {
    "Name": "AD Sports 1",
    "Url": "https://bighra.crik.live/Channels/ad-sports.json",
    "ImageUrl": "https://asset.crik.live/Channels/ad-1.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AD Sports 1",
    "endDate": "2050-12-29",
    "endTime": "12:00"
      },
        {
    "Name": "AD Sports 2",
    "Url": "https://bighra.crik.live/Channels/ad-sports.json",
    "ImageUrl": "https://asset.crik.live/Channels/ad-2.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AD Sports 2",
    "endDate": "2050-12-29",
    "endTime": "12:00"
      },
       {
    "Name": "AD Sports 3",
    "Url": "https://bighra.crik.live/Channels/ad-sports.json",
    "ImageUrl": "https://asset.crik.live/Channels/ad-3.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "AD Sports 3",
    "endDate": "2050-12-29",
    "endTime": "12:00"
      },
        {
    "Name": "YAS",
    "Url": "https://bighra.crik.live/Channels/ad-sports.json",
    "ImageUrl": "https://asset.crik.live/Channels/yas.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "YAS",
    "endDate": "2050-12-29",
    "endTime": "12:00"
      }
    ],
"title": "AD Sports"
  }
]
    ';
       file_put_contents($json, $AD_Sports);
?>

<?php
include 'asia.php';
$IPL0 = '
{
"Name": "CSK vs GT",
"Url": "https://bighra.crik.live/Events/ipl.json",
"ImageUrl": "https://asset.crik.live/Events/ipl/1.webp",
"startDate": "2023-05-28",
"startTime": "00:01",
"EventName": "IPL 2023",
"endDate": "2023-05-28",
"endTime": "23:59"
},

';
 $IPL =  '{    
    "events": ['.$ASIA .$IPL0.'
{
    "Name": "Star Sports",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://asset.crik.live/Channels/star.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    },
    {
    "Name": "Star Sports Hindi",
    "Url": "https://bighra.crik.live/Channels.json",
    "ImageUrl": "https://asset.crik.live/Channels/star-hindi.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Star Sports Hindi",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }
      ],
"title": "PSL"
  }';
  $IPL1 = '[' . $IPL . ']';
    file_put_contents('ipl.json', $IPL1)
?>


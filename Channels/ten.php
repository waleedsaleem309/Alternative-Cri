<?php
include 'u19.php';
include 'psl.php';
include 'pak.php';
$json = 'ten.json';
$TEN = '{
"events":[ 
{
    "Name": "Ten Sports",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/Ten-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Ten Sports",
    "endDate": "2050-12-19",
    "endTime": "12:00"
    }
    ],
    "title": "Ten Sports"
    }';
      $TEN1 = '{ 
"events": [ '
. $PAK . ',' .
'{
    "Name": "Ten Sports",
    "Url": "https://bighra.tk/Channels.json",
    "ImageUrl": "https://assets.crik.live/Channels/Ten-Sports.jpg",
    "startDate": "2022-1-1",
    "startTime": "12:00",
    "EventName": "Ten Sports",
    "endDate": "2050-12-29",
    "endTime": "12:00"
    }' .   '
    ],
    "title": "Ten Sports"
    }';
    //   echo $A1;
    $TEN2 = '[' . $TEN1 . ']';
      file_put_contents($json , $TEN2);
            //   header("Location: https://crik.live/Channels/" . $json);
?>

<?php
// date_default_timezone_set("Asia/Tokyo");


// $predate=strtotime("2023-02-04 20:35:00");
// echo $predate;
// $date=date("Y-F-j h:i:s A", $predate);
$week=time()+(7*24*60*60);
echo $week;
$date=date("Y-F-j h:i:s A");

echo $date;



?>
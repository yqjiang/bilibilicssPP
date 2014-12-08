<?php
ignore_user_abort();
set_time_limit(0);
$interval = 60*30;//change image per half an hour!
$run = 1;
do{
$run = include "config.php";
if(!$run) die ("stop");
sleep($interval);
$random = rand(1,7);
exec('cp PP/'.$random.'.jpg backgroud.jpg');
}while(true);
?>

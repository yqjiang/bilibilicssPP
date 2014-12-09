<?php
$random = rand(1,7);
$im=file_get_contents('PP/'.$random.'.jpg');
header('content-type: image/jpg');
echo $im;
?>

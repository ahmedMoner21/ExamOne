<?php




$date = new DateTime('2012-12-21');
$date ->modify('-1 month');


echo "the new month is" . " " .  $date->format('m');
<?php

$interval=$_POST['interval'];
$semail=$_POST['semail'];
$passwd=$_POST['passwd'];
$temail=$_POST['temail'];
$data = $interval . "\n" . $semail . "\n" . $passwd . "\n" . $temail;
$file="../backend/inputdata.txt";

file_put_contents($file, $data . PHP_EOL);
print "Data added";

 ?>

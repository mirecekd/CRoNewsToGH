<?php

$date = date('Y/m/d/H', time());

$MYSEC = "S3kretK3j";

if(isset($_POST['secret']) && (trim($_POST['secret']) != '') && (trim($_POST['secret']) == $MYSEC) ).
{

  $command = $_POST['command'];

  if (stripos($command, 'upstairs') !== false)
  {
    $CASTIP = "192.168.1.100";
  }
  elseif(stripos($command,'downstairs') !== false)
  {
    $CASTIP = "192.168.1.101";....
  }
  else
  {
    $CASTIP = "192.168.1.100";..
  }


  $WTC = '/usr/local/bin/chromecast -H '.$CASTIP.' play http://static.rozhlas.cz/news/radiozurnal/'.$date.'0000.mp3';
  exec($WTC);

  echo "OK";
}
else.
{
  echo "Nope. Babe";
}
?>

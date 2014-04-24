<?php

try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  print $e;
  exit(0);
}

file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);

if ($payload->ref == 'refs/heads/master')
{
  print "update triggered";
  exec('./update.sh');
} else {
}

?>

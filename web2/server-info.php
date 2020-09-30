<?php
  # S_SERVER SUPERGLOBAL

  // Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
  ];

  // echo 'SERVER' . '<br>';
  // echo 'Host Server Name: ' . $server['Host Server Name'] . '<br>';
  // echo 'Host Header: ' . $server['Host Header'] . '<br>';
  // echo 'Server Software: ' . $server['Server Software'] . '<br>';
  // echo 'Document Root: ' . $server['Document Root'] . '<br>';
  // echo 'Current Page: ' . $server['Current Page'] . '<br>';
  // echo 'Script Name: ' . $server['Script Name'] . '<br>';
  // echo 'Absolute Path: ' . $server['Absolute Path'] . '<br>';
  // echo '<br><br><br>';

  // print_r($server);

  // Create Client Array
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
  ];

  // echo 'CLIENT' . '<br>';
  // echo 'Client System Info: ' . $client['Client System Info'] . '<br>';
  // echo 'Client IP: ' . $client['Client IP'] . '<br>';
  // echo 'Remote Port: ' . $client['Remote Port'] . '<br>';

  // print_r($client);
?>
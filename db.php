<?php

  $mysqli = new mysqli("localhost","2461277","711071","db2461277");

  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>

<?php

DEFINE ('DB_USER', 'masokan');
DEFINE ('DB_PASSWORD', 'Jeff-1996');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'masokan');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>
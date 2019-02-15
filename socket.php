<?php
$host = "127.0.0.1";
$port = 2019;
set_time_limit(5000);
$socket2 = socket_create(AF_INET, SOCK_STREAM, 0) or die("could not create");
$result2 = socket_bind($socket2, $host,2019) or die("not bind");
$result2 = socket_listen($socket2,3);
$accept = socket_accept($socket2);
$input  = socket_read($accept, 1024);
$input = trim($input);
echo $input;
$output = strrev($input);
socket_write($accept, $output,strlen($output));
?>
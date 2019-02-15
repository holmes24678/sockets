<?php
$host = "127.0.0.1";
$port= 2019;
$message = $_POST['msg'];
$socket1 = socket_create(AF_INET, SOCK_STREAM, 0) or die("couldnt create");
$result1 = socket_connect($socket1, $host ,2019) or die("couldnt connect");
socket_write($socket1, $message , strlen($message)) or die("cant write");
$result1 = socket_read($socket1, 1024);
$result1 = strrev($result1);
echo $result1;
echo "<br>";
$error = socket_last_error($socket1);
$error = socket_strerror($error);
echo $error;
?>
<!DOCTYPE html>
<html>
<head>
	<title>clint</title>
</head>
<body>
<form action="clinet.php" method="post">
	<input type="text" name="msg">
	<input type="submit" name="sub">
</form>
</body>
</html>

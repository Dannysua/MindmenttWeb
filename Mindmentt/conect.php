<?php
$link = mysql_connect('localhost', 'root', 'password');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>
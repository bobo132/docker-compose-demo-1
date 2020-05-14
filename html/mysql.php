<?php
$dbhost = 'mysql';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
	die('could not connect! ' . mysqi_error());
}
echo 'connect success! ';
mysqli_close($conn);

?>


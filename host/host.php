<?php
$username="root";
$password="";
$host  ="localhost";
$Database ="itn";
mysql_connect($host,$username,$password)or die("No such user");
mysql_select_db($Database) or die ("No Database found");

?>
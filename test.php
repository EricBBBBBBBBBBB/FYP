<HTML>
	<HEAD>
		<TITLE>Testing Website</TITLE>
	</HEAD>
	<BODY>
		<h1>it is for testing</h1>
	</BODY>
</HTML>

<?php

//Database Location
$db_server = "localhost";
//Database Name
$db_name = "fyp";
//Username
$db_user = "root";
//Password
$db_passwd = "root";
$db_port = 8889;

$link = mysql_connect($db_server.":".$db_port, $db_user, $db_passwd);
if (!$link) {
  die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($db_name);

$sql = "SELECT * FROM user";
$result = mysql_query($sql);
//$row = @mysql_fetch_row($result);
while($row = mysql_fetch_row($result))
{
	echo "userID = ".$row[0]."<br/>";
	echo "username = ".$row[1]."<br/>";
	echo "password = ".$row[2]."<br/>";
	echo "usertype = ".$row[3]."<br/><br/>";
}

if ($_GET["lang"] == "en" || $_GET["lang"] == "")
	include "lang_en.php";
else
	include "lang_zh.php";

echo $title."<br/>";
echo $welcome."<br/>";
echo $lang."<br/>";

/*
1	Presents
2	Graphics & Design
3	Lifestyle
4	Writing / Translation
5	Music
6	Programe Desgin
7	Web 		6
8	Crafts 		1
*/

$mainList = array(
	1 => 'Presents',
	2 => 'Graphics & Desgin',
	3 => 'Lifestyle',
	4 => 'Writing / Translation',
	5 => 'Music',
	6 => 'Programe Design',
	7 => 'Web',
	8 => 'Crafts');

$subList = array(
	1 => array(8),
	6 => array(7));



?>

<a href="/test.php?lang=zh"> zh </a> || <a href="/test.php?lang=en"> en </a>
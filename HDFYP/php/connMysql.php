<?php
  $db_host = "localhost";
  $db_table = "lc_database";
  $db_username = "root";
  $db_password = "root";
  $db_port = 8889;

  if(!@mysql_connect($db_host.":".$db_port, $db_username, $db_password))
    die("Error Database access！");

  if(!@mysql_select_db($db_table))
    die("Error Database access！");

  mysql_query("SET NAMES 'utf8'");
?>

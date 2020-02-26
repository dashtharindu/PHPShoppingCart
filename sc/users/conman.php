<?php 
mysql_connect('localhost','root','') or die("Connection Error : ".mysql_error());
mysql_query("SET NAMES utf8") ;

mysql_select_db('Tharindu_d') or die("DB Error : ".mysql_error());

?>
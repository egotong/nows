<?php
	$conn = mysqli_connect("db_hostname","db_username","db_password"); //连接数据库地址、用户名、密码
	//mysql_query("set names 'utf8'"); //数据库编码
	mysqli_select_db($conn,"sy_nows"); //数据库名称
?>

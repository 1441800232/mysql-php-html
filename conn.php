<?php
	 $conn = @mysqli_connect("localhost","root","") or die("数据库连接出错！");//输入相应的数据库地址、用户名和密码
	 $selected = mysqli_select_db($conn, "userchen");//打开一个数据表，请打开readme.txt在这个表中创建字段
     mysqli_set_charset($conn,'utf8');

?>
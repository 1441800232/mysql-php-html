<?php

session_start();
include("conn.php"); //连接数据库
$account = isset($_POST['account']) ? $_POST['account'] : ''; //取得用户昵称
$email = isset($_POST['email']) ? $_POST['email'] : ''; //取得用户邮箱
$password2 = isset($_POST['password2']) ? $_POST['password2'] : ''; //取得用户密码
$ming = isset($_POST['username']) ? $_POST['username'] : ''; //获取名字
if (isset($_POST['submit'])) //当用户点击提交时
{
	$sql = "INSERT INTO user(account,email,password,username) VALUES('$account','$email','$password2','$ming');"; //SQL语句
	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('注册成功');window.location= 'login.php';</script>";
	} else {
		$mysql_err =  mysqli_error($conn);
		echo $mysql_err;

		// echo "<script>alert('注册失败，请检查用户名密码');window.location= 'signUp.php';</script>";
	}

	// mysqli_query($conn,$sql);//执行SQL语句，写入用户数据
	// echo "<script>alert('注册成功');window.location= 'signUp.php';</script>";
	// echo $sql;
}

function uuid($prefix = '')
{
	$chars = md5(uniqid(mt_rand(), true));
	$uuid  = substr($chars, 0, 8) . '-';
	$uuid .= substr($chars, 8, 4) . '-';
	$uuid .= substr($chars, 12, 4) . '-';
	$uuid .= substr($chars, 16, 4) . '-';
	$uuid .= substr($chars, 20, 12);
	return $prefix . $uuid;
}
?>

<html lang="en">
<meta charset="UTF-8">
<meta account="Author" content="">
<meta account="Keywords" content="">
<meta account="Description" content="。">

<head>
	<title>PHP注册</title>
	<style>
		.kuang {
			width: 600px;
			height: 387px;
			margin: 0 auto;
			border: 1px solid #999;
			border-radius: 10px;
			box-shadow: 0px 0px 5px 2px #CCCCCC;
		}

		.head {
			width: 100%;
			line-height: 48px;
			margin: 10px 150px;
			font-size: 27px;
		}
	</style>

</head>

<body>

	<script language="javascript">
		function checkform() //使用JS来验证用户输入是否符合规范
		{
			if (myform.username.value == "") //昵称不能为空
			{
				alert("昵称不能为空！");
				myform.username.focus();
				return false;
			}

		
			}
			if (myform.email.value == "") //邮箱不能为空
			{
				alert("邮箱必须填写！");
				myform.email.focus();
				return false;
			}
			
			if(myform.password1.value.length > 12){
				array("");
				myform.password1.focus();
				return false;
			
			}
			if (myform.password1.value == "") //密码不能为空
			{
				alert("密码不能为空！");
				myform.password1.focus();
				return false;
			}
			if (myform.password2.value == "") //密码不能为空
			{
				alert("密码不能为空！");
				myform.password2.focus();
				return false;
			}
			if (!myform.password1.value.replace(/[^\a-\z\A-\Z]/g, '')) //使用正则表达式来判断密码
			{
				alert("密码不符合规范！");
				myform.password1.focus();
				return false;
			}
			if (myform.password1.value.length > 11 && myform.password1.value.length <6) //如果密码小于6位
			{
				alert("密码不能少于7位，大于11位！");
				myform.password1.focus();
				return false;
			}
			if (myform.password1.value != myform.password2.value) //判断两次输入的密码是否一致
			{
				alert("两次输入的密码不一致！");
				myform.password1.focus();
				return false;
			}
		}
	</script>
	<div class="kuang">
		<div class="head">
			<span class="headone">超级管理注册</span>
		</div>
		<form action="" method="post" name="myform" onsubmit="return checkform();">
			<!--注册表单-->
			<center>
				<table height=60;>
					<tr>
						<td>姓名：</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>电话:</td>
						<td><input type="text" name="account" placeholder="电话号码是11位" /><dfn></dfn></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" /></td>
					</tr>

					<tr>
						<td>密码:</td>
						<td><input type="password" name="password1" placeholder="密码不能少于7位，大于11位！" /><dfn>(密码不能少于7位，大于11位的字母或数字组成)</dfn></td>
					</tr>
					<tr>
						<td>确认密码:</td>
						<td><input type="password" name="password2" /></td>
					</tr>

					<tr>
						<td><input type="submit" name="submit" value="注册" /></td>
						<td><a href="login.php">登录</a></td>
					</tr>
				</table>
			</center>
		</form>
	</div>
</body>

</html>
<?php

    // error_reporting(0);
    session_start();
    include("conn.php");
    $postEmail = isset($_POST['email']) ? $_POST['email'] : ''; //取得用户输入的email
    $postPassword = isset($_POST['password']) ? $_POST['password'] : ''; //取得用户输入的密码
    $sql = "SELECT email,password,id FROM user WHERE email = '$postEmail'"; 
   
    $query = mysqli_query($conn, $sql); //执行SQL语句
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $email = $row['email']; //将查询的结果赋值  
    $password = $row['password']; //将查询的结果赋值uid
    if (isset($_POST['login'])) //当用户点击登录按钮时
    {
        if ($email== $postEmail &&  $password== $postPassword) //验证用户名和密码是否一致
        {
            $_SESSION['userinfo'] = ['email' => $email,];
         

          
            echo "<script>alert('登入成功');window.location= 'management.php';</script>";
            
        } 
        else {
            echo "<script>alert('登入失败');</script>";
            $mysql_err =  mysqli_error($conn);
			echo $mysql_err;
            
        }
    }


    ?>

<html lang="en">
<meta charset="UTF-8">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/favicon.ico"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/signin/">

    <title>登入</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/@bootcss/v3.bootcss.com@1.0.17/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script language="javascript">
    function Checked() {
        if (myform.email.value == "") //如果Email为空
        {
            alert("您还没有填写登录邮箱！");
            myform.email.focus();
            return false;
        }
        if (myform.password.value == "") //如果密码为空
        {
            alert("您忘记填写密码了！");
            myform.password.focus();
            return false;
        }
    }
</script>


<head>
    <title>PHP登录</title>
</head>

<body>


<div class="container" >

<form class="form-signin"  action="" method="post" name="myform"onsubmit="return Checked();" >
  <h2 class="form-signin-heading">Please sign in</h2>
  <label for="inputEmail" class="sr-only">Email address</label>
 <input type="email" id="inputEmail" class="form-control" name="email"  placeholder="Email address" required autofocus>     <!--邮箱 -->
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password"  placeholder="Password" required>   <!--密码-->
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember" value="remember-me"> 记住账号
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit"  name="login" value="登录" >登入</button>
   <a class="btn btn-lg btn-primary btn-block" href="superSingUp.php">注册</a>
</form>

</div> <!-- /container -->
    <!--登录表单-->
    <!-- <form action="" method="post" name="myform"onsubmit="return Checked();">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="登录" /></td>
                <td><a href="signUp.php">注册</a></td>
            </tr>
        </table>
    </form> -->
    <!--登录表单结束-->

</body>

</html>
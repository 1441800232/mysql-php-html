

<?php

session_start();
if(empty($_SESSION['userinfo']['uid'])&&empty($_SESSION['userinfo']['username'])){
  echo '未登录';
}else{
  echo '已登录';
}
?>
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
      
       <P><a href="login.php">登录</a></P> 
       <p><a href="signUp.php">注册</a></p>
    </div>
</body>
</html>
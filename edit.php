<?php
// include_once "conn.php";

// $sql = "SELECT id, username, account, money FROM user_copy1";
// $result = $conn->query($sql);

// if (mysqli_num_rows($result) > 0) {
//     // 输出数据
//     while($row = mysqli_fetch_assoc($result)) {
//         echo 

//         "<from  action='edit2.php' method='post'>  
//         <h4 class='alert alert-primary text-center'>修改会员信息</h4>  
//         <label >id</label></div>" . "<input type='text' class='form-control' name='id' id='name' value='{$row['id']}'> "."
//         <label >姓名</label>" . "<input type='text' class='form-control' name='username' id='name' value='{$row['username']}'> ". "
//         <label>手机号码</label>" ." <input type='text' class='form-control' name='account' id='name' value='{$row['account']}'>".
//         "<label>金额</label>"."<input type='text' class='form-control' name='money' id='name' value='{$row['money']}'>"."<br>".
//         ""."<a href='edit2'.php  type='submit' class='btn btn-primary btn-block' >保存</a>
//         </from>";
//     }
// } else {
//     echo "0 结果";
// }
 
// if(!$query){
//     exit('<h1>查询数据失败</h1>');
// }
// $user = mysqli_fetch_assoc($query);
// if(!$user){
//     exit('<h1>找不到你要编辑的数据</h1>');
// }

?>

    <?php
    require "conn.php";
    $id=$_POST["id"];
    $money=$_POST["money"];
    $sql = "UPDATE user_copy1 SET money='".$money."' WHERE id=".$id;
    echo $sql;
   $res= mysqli_query( $conn, $sql );
   echo "<script>window.location= 'management.php';</script>;";
 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Document</title>
</head>
<body>
    <a class="btn btn-primary btn-lg active" role="button"  > 查询跟新  </a>
</body>
</html>
    

<?php
header("Content-type: text/html; charset= utf8");
session_start();
include("conn.php"); //连接数据库
$conn->set_charset("utf8");
$sql = 'SELECT * FROM user_copy1 ';
$res = mysqli_query($conn, $sql,);


// $ress = array();
// echo "<center><h2 class='caa' class='form-signin-heading'>会员信息</h2></center>";

// if ($res->num_rows > 0) {

//     while ($row = $res->fetch_assoc()) {

//         echo "<div class='flex justify-center'>";
//         echo "<tr>";
//     //     echo"<div class='w-20 border'>名字</div>  
//     //     <div class='w-64 border'>邮箱</div>
//     //    <div class='w-40 border'>密码</div>
//     //    <div class='w-48 border'>手机号码</div>";
//         echo "
//         <div class='w-80 border'>名字：{$row['username']}</div>  
//         <div class='w-64 border'>邮箱：{$row['email']}</div>
//         <div class='w-40 border'>密码：{$row['password']}</div>
//         <div class='w-48 border'>手机号码：{$row['account']}</div>
//         <div class='w-48'boredr ><a class='btn btn-lg btn-primary' href='({$row['id']})'>删除</a></div>"
//         ;
//         //  echo "<td>
//         // 				<a href='javascript:del({$row['id']})'>删除</a>
//         // // 					<a href='editnews.php?id={$row['id']}'>修改</a>
//         // // 				  </td>";
//         // echo"<tr><tb>".$row["id"]."</td><td>".$row["username"]."</td><td>"
//         // .$row["password"].$row["email"]."</td><td>".$row["account"]."</td></tr>";
//         echo  "</tr>";
//         echo "</div>";
//     }
//     // echo "</table>";
// } else {
//     // echo "0 $res";
// }
// // $conn-> close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>匠心</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .kuang {
            width: 600px;
            height: 387px;
            margin: 0 auto;
            border: 1px solid #999;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 2px #CCCCCC;
        }

        .chen {
            border: 1px solid #999;
        }

        .caa {
            font-size: 32px;
        }
    </style>
    <script type="text/javascript">
        function del(id) {
            if (confirm("确定删除这个会员吗？")) {
                window.location = "del.php?id=" + id;
            }
        }
    </script>
</head>

<body>
    <h2 class=" btn btn- btn-block">会员信息</h2>

    <div class="container">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">姓名</th>
                    <th class="text-center">邮箱</th>
                    <th class="text-center">密码</th>
                    <th class="text-center">手机号码</th>
                    <th class="text-center">操作</th>
                    <th class="text-center">余额(单位元)</th>
                    <th class="text-center">时间</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($res)) : ?>
                    <tr class="text-center">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['account']; ?></td>

                        <td>
                            <a href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">删除会员</a>
                            <a href="edit.php"  class="btn btn-default">修改会员信息</a>
                        </td>
                        <td><?php echo $row['money']; ?></td>
                        <td><?php echo $row['Time']; ?></td>


                    </tr>
                <?php endwhile; ?>  
            </tbody>
        </table>
        <a class="btn btn-primary btn-block" href="signUp.php">添加会员信息</a>
    </div>

</body>

</html>
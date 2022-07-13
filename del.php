	<?php
// 1. 接收传递过来的id


// 2. 连接数据库
$conn = @mysqli_connect("localhost","root","") or die("数据库连接出错！");//输入相应的数据库地址、用户名和密码
$selected = mysqli_select_db($conn, "userchen");//打开一个数据表，请打开readme.txt在这个表中创建字段
// 3. 删除该条数据
$id = $_GET['id'];
    $query = mysqli_query($conn,"delete from user_copy1 where id = {$id}");
// 4. 查询失败的处理
    if (!$query) {
        exit('<h1>查询数据失败</h1>');
    }
// 5. 受影响的行数
    $affected_rows = mysqli_affected_rows($conn);
// 6. 删除失败
    if ($affected_rows <= 0) {
        exit('<h1>删除失败</h1>');
    }
    header('Location: management.php');

    
?>

    


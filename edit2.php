<?php
include "conn.php";
$id=$_POST['id'];

if(isset($_POST['submit'])){
    $sql = "INSERT INTO user(account,money,username,id) VALUES('$account','$money','$username','$id');"; //SQL语句
    
    if (mysqli_query($conn, $sql)) {
 		echo "<script>alert('修改成功');window.location= 'management1.php';</script>";
	} else {
		$mysql_err =  mysqli_error($conn);
		echo $mysql_err;	// echo "<script>alert('注册失败，请检查用户名密码');window.location= 'signUp.php';</script>";
	}
}

//$query = mysqli_query($link,"update stu set name={$name},age={$age},gender={$gender} where id = {$id};");
// var_dump("UPDATE user_copy1 SET money={$money},username={$username},account='{$account}' WHERE id={$id}");

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
<form action="edit2.php" method="post">
    <table>
        <tr>
            <td>
            id:<input type="text" name="id" > 
                <button type="submit" name="submit'" value="提交 "> 提交 </button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

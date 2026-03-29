<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once __DIR__ . '/db_connect.php';
$username = $_POST['user'];
$password = $_POST['pwd'];
$sql = "select * from mysql.user where User='$username' and Password='$password'";

$ret = $conn->query($sql);

if ($ret->num_rows == 1) {
    echo "<script>alert(\"恭喜您，登陆成功\")</script>";
    echo "<script>window.location.href='./index.html'</script>";
} else {
    echo "<script>alert(\"账号或者密码错误，请重新输入\")</script>";
    echo "<script>window.location.href='./login.html'</script>";
}
$conn->close();

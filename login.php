<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "root") or die("����ʧ��: " . $conn->connect_error);
$conn->query("set names gbk");
$username = $_POST['user'];
$password = $_POST['pwd'];
$sql = "select * from mysql.user where User='$username' and Password='$password'";

$ret = $conn->query($sql);

if ($ret->num_rows == 1) {
    echo "<script>alert(\"��ϲ������½�ɹ�\")</script>";
    echo "<script>window.location.href='./index.html'</script>";
} else {
    echo "<script>alert(\"�˺Ż��������������������\")</script>";
    echo "<script>window.location.href='./login.html'</script>";
}
$conn->close();

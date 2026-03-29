<?php
require_once __DIR__ . '/db_connect.php';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];


    if ($password === $confirmPassword) {
        $sql = "insert into mysql.user(Host,User,Password,ssl_cipher,x509_subject,x509_issuer)
        values ('localhost','$username','$password',0,0,0)";
        $sql2 = "grant all on *.* to '$username'@'localhost';";
        if ($conn->query($sql) == true && $conn->query($sql2) == true) {
            echo ("<script>alert('注册成功！')</script>");
            echo ("<script>window.location.href='./login.html'</script>");
        }
    } else {
        echo ("<script>alert('前后两次输入的密码不匹配！请重新输入')</script>");
        echo ("<script>window.location.href='./register.html'</script>");
    }
}
$conn->close();

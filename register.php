<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("����ʧ��");
$conn->query("SET NAMES gbk");
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
            echo ("<script>alert('ע��ɹ���')</script>");
            echo ("<script>window.location.href='./login.html'</script>");
        }
    } else {
        echo ("<script>alert('ǰ��������������벻ƥ�䣡����������')</script>");
        echo ("<script>window.location.href='./register.html'</script>");
    }
}
$conn->close();

<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("Á¬½ÓÊ§°Ü");
$conn->query("SET NAMES gbk");

$number = $_GET['ID'];
$sql = "delete from xs where Ñ§ºÅ=$number";

if ($conn->query($sql) == true) {
    echo "<script>alert('delete successfully!')</script>";
    echo "<script>window.location.href='./overview.php'</script>";
} else {
    echo ("<script>alert('delete failed!')</script>");
    echo ("<script>window.location.href='./overview.php'</script>");
}
$conn->close();

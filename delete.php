<?php
require_once __DIR__ . '/db_connect.php';

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

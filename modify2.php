<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("连接失败");
$conn->query("SET NAMES gbk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <title>学生信息修改</title>

</head>

<body>
    <?php
    $id = $_POST['ID'];
    $name = $_POST['s_name'];
    if (!empty($name)) {
        $sql = "update xs set 姓名='$name' where 学号='$id'";
        $conn->query($sql);
    }
    $major = $_POST['major_in'];
    if (!empty($major)) {
        $sql = "update xs set 专业名='$major' where 学号='$id'";
        $conn->query($sql);
    }
    $gender = $_POST['gender'];
    if (!empty($gender)) {
        $sql = "update xs set 性别='$gender' where 学号='$id'";
        $conn->query($sql);
    }
    $birthday = $_POST['date'];
    if (!empty($birthday)) {
        $sql = "update xs set 出生日期='$birthday' where 学号='$id'";
        $conn->query($sql);
    }
    $sum_credit = $_POST['credits'];
    if (!empty($sum_credit)) {
        $sql = "update xs set 总学分='$sum_credit' where 学号='$id'";
        $conn->query($sql);
    }
    $note = $_POST['notes'];
    if (!empty($note)) {
        $sql = "update xs set 备注='$note' where 学号='$id'";
        $conn->query($sql);
    }
    echo ("<script>alert('yes! update successfully!')</script>");
    echo ("<script>window.location.href='./overview.php'</script>");
    $conn->close();
    ?>
</body>

</html>
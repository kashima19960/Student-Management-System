<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("连接失败");
$conn->query("SET NAMES gbk");
?>

<html>

<head>
    <title>添加学生</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <style>
        body {
            background-image: url(./君名.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php
    $id = $_POST['id'];
    $name = $_POST['s_name'];
    $major = $_POST['major_in'];
    $gender = $_POST['gender'];
    $birthday = $_POST['date'];
    $sum_credit = $_POST['credits'];
    $note = $_POST['notes'];
    if (empty($id)) {
        echo ("<script>alert('学号不能为空！')</script>");
        echo ("<script>window.location.href='add.html'</script>");
        $conn->close();
    } else {
        $sql = "insert into xs(学号, 姓名, 专业名,性别, 出生日期, 总学分,备注)
        values ('$id','$name','$major','$gender','$birthday','$sum_credit','$note')";
        if ($conn->query($sql) == true) {
            echo ("<script>alert('yes! add successfully!')</script>");
            echo ("<script>window.location.href='index.html'</script>");
        } else {
            echo ("<script>alert('oops add failed!')</script>");
            echo ("<script>window.location.href='index.html'</script>");
        }
        $conn->close();
    }
    ?>
</body>

</html>
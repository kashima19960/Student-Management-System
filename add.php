<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("����ʧ��");
$conn->query("SET NAMES gbk");
?>

<html>

<head>
    <title>���ѧ��</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <style>
        body {
            background-image: url(./����.png);
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
        echo ("<script>alert('ѧ�Ų���Ϊ�գ�')</script>");
        echo ("<script>window.location.href='add.html'</script>");
        $conn->close();
    } else {
        $sql = "insert into xs(ѧ��, ����, רҵ��,�Ա�, ��������, ��ѧ��,��ע)
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
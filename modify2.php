<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("����ʧ��");
$conn->query("SET NAMES gbk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <title>ѧ����Ϣ�޸�</title>

</head>

<body>
    <?php
    $id = $_POST['ID'];
    $name = $_POST['s_name'];
    if (!empty($name)) {
        $sql = "update xs set ����='$name' where ѧ��='$id'";
        $conn->query($sql);
    }
    $major = $_POST['major_in'];
    if (!empty($major)) {
        $sql = "update xs set רҵ��='$major' where ѧ��='$id'";
        $conn->query($sql);
    }
    $gender = $_POST['gender'];
    if (!empty($gender)) {
        $sql = "update xs set �Ա�='$gender' where ѧ��='$id'";
        $conn->query($sql);
    }
    $birthday = $_POST['date'];
    if (!empty($birthday)) {
        $sql = "update xs set ��������='$birthday' where ѧ��='$id'";
        $conn->query($sql);
    }
    $sum_credit = $_POST['credits'];
    if (!empty($sum_credit)) {
        $sql = "update xs set ��ѧ��='$sum_credit' where ѧ��='$id'";
        $conn->query($sql);
    }
    $note = $_POST['notes'];
    if (!empty($note)) {
        $sql = "update xs set ��ע='$note' where ѧ��='$id'";
        $conn->query($sql);
    }
    echo ("<script>alert('yes! update successfully!')</script>");
    echo ("<script>window.location.href='./overview.php'</script>");
    $conn->close();
    ?>
</body>

</html>
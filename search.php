<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("连接失败");
$conn->query("SET NAMES gbk");
?>
<html>

<head>
    <meta charset="GBK">
    <title>查询学生</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url(./君名.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            color: blue;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: blue;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            background-color: red;
            color: white;
            border-radius: 5px;
            margin-right: 5px;
        }

        a.button.blue {
            background-color: blue;
        }

        .return {
            display: inline-block;
            border: 2px solid black;
            border-radius: 20px;
            padding: 5px;
            margin: 5px;
            background-image: linear-gradient(to right, #0849ebf5, #e6134f);
            text-decoration: none;
            font-size: 32px;
            text-align: center;
            color: black;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php
        if (isset($_POST['exact']) && (!empty($_POST['id']))) {
            $id = $_POST['id'];
            $sql = "select * from xs where 学号='$id '";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h1 style='text-align: center;color: red;'>一共查询到" . "$result->num_rows" . "条数据</h1>";
                echo "<tr>
                  <th>学号</th>
                  <th>姓名</th>
                  <th>专业名</th>
                  <th>性别</th>
                  <th>出生日期</th>
                  <th>总学分</th>
                  <th>备注</th>
                  <th>功能</th>
                  </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['学号']}</td>";
                    echo "<td>{$row['姓名']}</td>";
                    echo "<td>{$row['专业名']}</td>";
                    echo "<td>{$row['性别']}</td>";
                    echo "<td>{$row['出生日期']}</td>";
                    echo "<td>{$row['总学分']}</td>";
                    echo "<td>{$row['备注']}</td>";
                    echo "<td><a  class='button' href='delete.php?ID={$row['学号']}'>删除</a>
                    <a class='button blue' href='modify.php?ID={$row['学号']}'>修改</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>查无此人</td></tr>";
            }
        } else if (isset($_POST['fuzzy']) && (!empty($_POST['id']))) {
            $id = $_POST['id'];
            $sql = "select * from xs where 姓名 like '$id%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h1 style='text-align: center;color: red;'>一共查询到" . "$result->num_rows" . "条数据</h1>";
                echo "<tr>
                  <th>学号</th>
                  <th>姓名</th>
                  <th>专业名</th>
                  <th>性别</th>
                  <th>出生日期</th>
                  <th>总学分</th>
                  <th>备注</th>
                  <th>功能</th>
                  </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['学号']}</td>";
                    echo "<td>{$row['姓名']}</td>";
                    echo "<td>{$row['专业名']}</td>";
                    echo "<td>{$row['性别']}</td>";
                    echo "<td>{$row['出生日期']}</td>";
                    echo "<td>{$row['总学分']}</td>";
                    echo "<td>{$row['备注']}</td>";
                    echo "<td><a  class='button' href='delete.php?ID={$row['学号']}'>删除</a>
                    <a class='button blue' href='modify.php?ID={$row['学号']}'>修改</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "查无此人";
            }
        } else {
            echo "数据为空,因为您并未输入有效的信息！";
        }
        ?>
    </table>
    <a href="./index.html" class="return">返回主界面</a>
</body>

</html>
<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("连接失败");
$conn->query("SET NAMES gbk");
?>

<html>

<head>
    <title>学生管理系统</title>
    <meta charset="GBK">
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
    <h1>学生信息展示</h1>
    <table border="2">
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>专业名</th>
            <th>性别</th>
            <th>出生日期</th>
            <th>总学分</th>
            <th>备注</th>
            <th>功能</th>
        </tr>
        <?php
        $sql = "select * from xs";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['学号']}</td>";
                echo "<td>{$row['姓名']}</td>";
                echo "<td>{$row['专业名']}</td>";
                echo "<td>{$row['性别']}</td>";
                echo "<td>{$row['出生日期']}</td>";
                echo "<td>{$row['总学分']}</td>";
                echo "<td>{$row['备注']}</td>";
                echo "<td><a href='delete.php?ID={$row['学号']}' class='button'>删除</a>
                <a href='modify.php?ID={$row['学号']}' class='button blue'>修改</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>没有输出结果</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <br>
    <br>
    <a href="./index.html" class="return">返回主界面</a>
</body>

</html>
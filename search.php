<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("����ʧ��");
$conn->query("SET NAMES gbk");
?>
<html>

<head>
    <meta charset="GBK">
    <title>��ѯѧ��</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: url(./����.png);
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
            $sql = "select * from xs where ѧ��='$id '";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h1 style='text-align: center;color: red;'>һ����ѯ��" . "$result->num_rows" . "������</h1>";
                echo "<tr>
                  <th>ѧ��</th>
                  <th>����</th>
                  <th>רҵ��</th>
                  <th>�Ա�</th>
                  <th>��������</th>
                  <th>��ѧ��</th>
                  <th>��ע</th>
                  <th>����</th>
                  </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['ѧ��']}</td>";
                    echo "<td>{$row['����']}</td>";
                    echo "<td>{$row['רҵ��']}</td>";
                    echo "<td>{$row['�Ա�']}</td>";
                    echo "<td>{$row['��������']}</td>";
                    echo "<td>{$row['��ѧ��']}</td>";
                    echo "<td>{$row['��ע']}</td>";
                    echo "<td><a  class='button' href='delete.php?ID={$row['ѧ��']}'>ɾ��</a>
                    <a class='button blue' href='modify.php?ID={$row['ѧ��']}'>�޸�</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>���޴���</td></tr>";
            }
        } else if (isset($_POST['fuzzy']) && (!empty($_POST['id']))) {
            $id = $_POST['id'];
            $sql = "select * from xs where ���� like '$id%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h1 style='text-align: center;color: red;'>һ����ѯ��" . "$result->num_rows" . "������</h1>";
                echo "<tr>
                  <th>ѧ��</th>
                  <th>����</th>
                  <th>רҵ��</th>
                  <th>�Ա�</th>
                  <th>��������</th>
                  <th>��ѧ��</th>
                  <th>��ע</th>
                  <th>����</th>
                  </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['ѧ��']}</td>";
                    echo "<td>{$row['����']}</td>";
                    echo "<td>{$row['רҵ��']}</td>";
                    echo "<td>{$row['�Ա�']}</td>";
                    echo "<td>{$row['��������']}</td>";
                    echo "<td>{$row['��ѧ��']}</td>";
                    echo "<td>{$row['��ע']}</td>";
                    echo "<td><a  class='button' href='delete.php?ID={$row['ѧ��']}'>ɾ��</a>
                    <a class='button blue' href='modify.php?ID={$row['ѧ��']}'>�޸�</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "���޴���";
            }
        } else {
            echo "����Ϊ��,��Ϊ����δ������Ч����Ϣ��";
        }
        ?>
    </table>
    <a href="./index.html" class="return">����������</a>
</body>

</html>
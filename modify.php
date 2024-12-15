<?php
$conn = new mysqli("localhost", "root", "root", "xscj") or die("连接失败");
$conn->query("SET NAMES gbk");
?>

<html>

<head>
    <title>修改学生的相关信息</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <style>
        body {
            background-image: url(./君名.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            line-height: 25px;
        }

        form label {
            text-align: center;
        }

        form input[type="submit"] {
            background-color: red;
            color: white;
            margin-top: 10px;
            margin-right: 5px;
        }

        form input[type="reset"] {
            background-color: blue;
            color: white;
            margin-top: 10px;
            margin-left: 5px;
        }

        form input[type="submit"],
        form input[type="reset"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .radio-container {
            display: flex;
        }

        .radio-container label {
            margin-right: 10px;
        }

        label {
            font-size: 20px;
            height: 30px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px 10px;
            margin: 5px;
            background-image: linear-gradient(to right, #0849ebf5, #e6134f);
            text-decoration: none;
            font-size: 18px;
            text-align: center;
            color: black;
        }
    </style>
</head>

<body>
    <?php
    $id = $_GET['ID'];
    echo "<form action='./modify2.php' method='post'>
        <input type='hidden' name='ID' value='" . $id . "'>
        <label for='name'> 姓名<input type='text' name='s_name' id='name'></label>
        <br>
        <label for='major'>专业名<input type='text' name='major_in' id='major'></label>
        <br>
        <div class='radio-container'>
        <label><input type='radio' value='1' name='gender' required>男</label>
        <label><input type='radio' value='0' name='gender' required>女</label>
        </div>
        <br>
        <label for='date'>出生日期<input type='date' id='date' name='date'></label>
        <br>
        <label for='credit'>总学分<input type='text' id='credit' name='credits'></label>
        <br>
        <label for='note'>备注<input type='text' id='note' name='notes'></label>
        <br>
        <div class='button-container'>
             <input type='submit' value='提交'>
             <input type='reset' value='重置'>
        </div>
        </form>";
    ?>
    <div class="button-container">
        <a href="./overview.php">返回</a>
    </div>
</body>

</html>
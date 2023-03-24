<!DOCTYPE html>

<?php
session_start();
?>

<html>

<head>
    <meta charset="utf-8">
    <title>第四次课程作业-会话控制作业</title>
    <style>
        p {
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    echo "采用表单处理的session,实现登录信息会话控制。";
    echo "<br>";
    ?>
    <form action="6.php" method="post">
        <p>用户名：</p>
        <input type="text" name="username" value="<?php echo $_SESSION["username"] ?>">
        <br>
        <p>密码：</p>
        <input type="password" name="password" value="<?php echo $_SESSION["password"] ?>">
        <br>
        <input type="submit" value="提交">
    </form>
    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        echo "用户名：" . $_SESSION["username"];
        echo "<br>";
        echo "密码：" . $_SESSION["password"];
    }
    echo "<br>";
    echo "点击提交按钮后，用户名和密码会被保存在会话中，刷新页面后，用户名和密码会被保留。";
    ?>
</body>

</html>
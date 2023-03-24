<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>第四次课程作业-表单处理作业</title>
    <style>
        p {
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    echo "采用表单处理实现网页内的计算器程序";
    echo "<br>";
    ?>
    <form>
        <p>请输入第一个数</p>
        <input type="text" name="num1" id="num1">
        <br>
        <p>请输入第二个数</p>
        <input type="text" name="num2" id="num2">
        <br>
        <P>请选择运算符</P>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <br>
        <input type="submit" name="button" id="button" value="计算">
    </form>
    <?php
    echo "计算结果为：";
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    if ($num1 != null && $num2 != null) {
        switch ($operator) {
            case "add":
                echo $num1 + $num2;
                break;
            case "sub":
                echo $num1 - $num2;
                break;
            case "mul":
                echo $num1 * $num2;
                break;
            case "div":
                echo $num1 / $num2;
                break;
        }
    }
    echo "<br>";
    echo "<br>";
    echo "采用表单处理实现表单验证程序";
    echo "<br>";
    ?>
    <form>
        <p>请输入用户名</p>
        <input type="text" name="username" id="username">
        <br>
        <p>请输入密码</p>
        <input type="password" name="password" id="password">
        <br>
        <p>请再次输入密码</p>
        <input type="password" name="password2" id="password2">
        <br>
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $username = $_GET["username"];
    $password = $_GET["password"];
    $password2 = $_GET["password2"];
    if ($username != null && $password != null && $password2 != null) {
        if ($password == $password2) {
            echo "注册成功";
        } else {
            echo "两次输入的密码不一致";
        }
    }
    ?>
</body>

</html>
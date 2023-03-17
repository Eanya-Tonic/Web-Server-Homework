<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>第三次课程作业</title>
</head>
<body>
    <?php
    echo "字符串处理函数：";
    echo "<br>";
    echo "1.写一个函数,获取文件的后缀名";
    echo "<br>";
    function getSuffix($file)
    {
        $suffix = substr($file, strrpos($file, ".") + 1);
        return $suffix;
    }
    ?>
    <p style="display:inline-block;">输入文件名：</p>
    <form name="file" method="post" action="" style="display:inline-block;">
        <input type="text" name="file" id="file">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $file = $_POST["file"];
    if ($file != null) {
        echo "文件后缀名为：" . getSuffix($file);
    }
    echo "<br>";
    echo "<br>";
    echo "2.写一个函数,将数字表示成科学计数法";
    echo "<br>";
    function scientific($num)
    {
        $num = (string) $num;
        $len = strlen($num);
        $str = "";
        for ($i = 0; $i < $len; $i++) {
            if ($i % 3 == 0 && $i != 0) {
                $str = "," . $str;
            }
            $str = $num[$len - $i - 1] . $str;
        }
        return $str;
    }
    ?>
    <p style="display:inline-block;">输入数字：</p>
    <form name="num" method="post" action="" style="display:inline-block;">
        <input type="text" name="num" id="num">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $num = $_POST["num"];
    if ($num != null) {
        echo "科学计数法为：" . scientific($num);
    }
    echo "<br>";
    echo "<br>";
    echo "3.写一个函数，实现以下功能： 字符串“hello_world” 转换成 “HelloWorld”、”rem_by_id” 转换成 ”RemById”";
    echo "<br>";
    function convert($str)
    {
        $str = strtolower($str);
        $str = explode("_", $str);
        $len = count($str);
        for ($i = 0; $i < $len; $i++) {
            $str[$i] = ucfirst($str[$i]);
        }
        $str = implode("", $str);
        return $str;
    }
    ?>
    <p style="display:inline-block;">输入字符串：</p>
    <form name="str" method="post" action="" style="display:inline-block;">
        <input type="text" name="str" id="str">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $str = $_POST["str"];
    if ($str != null) {
        echo "转换后为：" . convert($str);
    }
    echo "<br>";
    echo "<br>";
    echo "正则表达式：";
    echo "<br>";
    echo "1.邮箱匹配正则表达式";
    echo "<br>";
    function isEmail($str)
    {
        $pattern = "/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/";
        if (preg_match($pattern, $str)) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <p style="display:inline-block;">输入邮箱：</p>
    <form name="email" method="post" action="" style="display:inline-block;">
        <input type="text" name="email" id="email">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $email = $_POST["email"];
    if ($email != null) {
        if (isEmail($email)) {
            echo "是合法的邮箱地址";
        } else {
            echo "不是合法的邮箱地址";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "2.国内电话和手机的正则表达式";
    echo "<br>";
    function isPhone($str)
    {
        $pattern = "/^((\+86)|(86))?(1[3-9]\d{9})$|^((0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/";
        if (preg_match($pattern, $str)) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <p style="display:inline-block;">输入电话号码：</p>
    <form name="phone" method="post" action="" style="display:inline-block;">
        <input type="text" name="phone" id="phone">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $phone = $_POST["phone"];
    if ($phone != null) {
        if (isPhone($phone)) {
            echo "是合法的电话号码";
        } else {
            echo "不是合法的电话号码";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "3.密码匹配正则表达式。字母开头，6-18位";
    echo "<br>";
    function isPassword($str)
    {
        $pattern = "/^[a-zA-Z]\w{5,17}$/";
        if (preg_match($pattern, $str)) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <p style="display:inline-block;">输入密码：</p>
    <form name="password" method="post" action="" style="display:inline-block;">
        <input type="text" name="password" id="password">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $password = $_POST["password"];
    if ($password != null) {
        if (isPassword($password)) {
            echo "是合法的密码";
        } else {
            echo "不是合法的密码";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "4.匹配16进制颜色值";
    echo "<br>";
    function isColor($str)
    {
        $pattern = "/^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/";
        if (preg_match($pattern, $str)) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <p style="display:inline-block;">输入颜色值：</p>
    <form name="color" method="post" action="" style="display:inline-block;">
        <input type="text" name="color" id="color">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $color = $_POST["color"];
    if ($color != null) {
        if (isColor($color)) {
            echo "是合法的颜色值";
        } else {
            echo "不是合法的颜色值";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "5.数字每隔四位就用空格分隔";
    echo "<br>";
    function splitNum($str)
    {
        $pattern = "/(\d{4})/";
        $str = preg_replace($pattern, "$1 ", $str);
        return $str;
    }
    ?>
    <p style="display:inline-block;">输入数字：</p>
    <form name="num" method="post" action="" style="display:inline-block;">
        <input type="text" name="num" id="num">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $num = $_POST["num"];
    if ($num != null) {
        echo "转换后为：" . splitNum($num);
    }
    echo "<br>";
    echo "<br>";
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>第二次课程作业-函数</title>
</head>

<body>
    <?php
    echo "1.自定义一个递归函数反序输出一个整数。";
    echo "<br>";
    function reverse($num)
    {
        if ($num < 10) {
            echo $num;
        } else {
            echo $num % 10;
            reverse((int) ($num / 10));
        }
    }
    $num = $_POST["num"];
    ?>
    <form name="num" method="post" action="">
        <input type="text" name="num" id="num">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    if ($num != null) {
        echo "反序输出为：";
        reverse($num);
    }
    echo "<br>";
    echo "<br>";
    echo "2.编写函数fun(n),n为三位自然数，判断n是否为水仙花数，是返回1，否返回0。-》求100-999内水仙花数。";
    echo "<br>";
    function fun($num)
    {
        $a = $num % 10;
        $b = (int) ($num / 10) % 10;
        $c = (int) ($num / 100);
        if ($num == $a * $a * $a + $b * $b * $b + $c * $c * $c) {
            return 1;
        } else {
            return 0;
        }
    }
    for ($i = 100; $i <= 999; $i++) {
        if (fun($i) == 1) {
            echo $i . "是水仙花数";
            echo "<br>";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "3.求某个数是不是素数。";
    echo "<br>";
    function prime($num)
    {
        $flag = 1;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $flag = 0;
                break;
            }
        }
        if ($flag == 1) {
            return 1;
        } else {
            return 0;
        }
    }
    ?>
    <form name="num" method="post" action="">
        <input type="text" name="num1" id="num1">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $num = $_POST["num1"];
    if ($num != null) {
        if (prime($num) == 1) {
            echo $num . "是素数";
        } else {
            echo $num . "不是素数";
        }
    }
    echo "<br>";
    echo "<br>";
    echo "4.求两个数最大公约数、最小公倍数。";
    echo "<br>";
    function gcd($a, $b)
    {
        if ($a < $b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
        $r = $a % $b;
        while ($r != 0) {
            $a = $b;
            $b = $r;
            $r = $a % $b;
        }
        return $b;
    }
    function lcm($a, $b)
    {
        return $a * $b / gcd($a, $b);
    }
    ?>
    <form name="num" method="post" action="">
        <input type="text" name="num2" id="num2">
        <input type="text" name="num3" id="num3">
        <input type="submit" name="button" id="button" value="提交">
    </form>
    <?php
    $num1 = $_POST["num2"];
    $num2 = $_POST["num3"];
    if ($num1 != null && $num2 != null) {
        echo "最大公约数为：" . gcd($num1, $num2);
        echo "<br>";
        echo "最小公倍数为：" . lcm($num1, $num2);
    }
    echo "<br>";
    echo "<br>";
    ?>
</body>

</html>
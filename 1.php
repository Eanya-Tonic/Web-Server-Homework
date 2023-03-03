<!DOCTYPE html>
<html>

<body>
    <h1>第一次课程作业</h1>
    <?php
    echo "1.百钱买百鸡问题";
    echo "<br>";
    for ($x = 0; $x <= 20; $x++) {
        for ($y = 0; $y <= 33; $y++) {
            $z = 100 - $x - $y;
            if ($z % 3 == 0 && 5 * $x + 3 * $y + $z / 3 == 100) {
                echo "公鸡：" . $x . "只，母鸡：" . $y . "只，小鸡：" . $z . "只";
                echo "<br>";
            }
        }
    }
    echo "<br>";
    echo "2.输入一个数判断它是不是回文数";
    echo "<br>";
    $num = 12321;
    $num1 = $num;
    $num2 = 0;
    while ($num1 > 0) {
        $num2 = $num2 * 10 + $num1 % 10;
        $num1 = (int) ($num1 / 10);
    }
    if ($num == $num2) {
        echo $num . "是回文数";
    } else {
        echo $num . "不是回文数";
    }
    echo "<br>";
    echo "<br>";
    echo "3.24点计算程序";
    echo "<br>";

    function number($num, $a, $b)
    { //返回两数计算的结果
        switch ($num) {
            case 1:
                return $a + $b;
                break;
            case 2:
                return $a - $b;
                break;
            case 3:
                return $a * $b;
                break;
            case 4:
                if ($b == 0) {
                    return 0;
                } else {
                    return $a / $b;
                }
                break;
        }
    }

    function number1($num)
    { //返回符号
        switch ($num) {
            case 1:
                return "+";
                break;
            case 2:
                return "-";
                break;
            case 3:
                return "*";
                break;
            case 4:
                return "/";
                break;
        }
    }

    function allcount($a, $b, $c, $d)
    { //echo 为24的值
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                for ($k = 1; $k <= 4; $k++) {
                    $result = number($k, number($j, number($i, $a, $b), $c), $d);
                    if ($result == 24) {
                        echo "(((" . $a . number1($i) . $b . ")" . number1($j) . $c . ")" . number1($k) . $d . ")=" . $result . "";
                        echo "<br>";
                    }
                    $result = number($k, number($i, $a, $b), number($j, $c, $d));
                    if ($result == 24) {
                        echo "(" . $a . number1($i) . $b . ")" . number1($k) . "(" . $c . number1($j) . $d . ")=" . $result . "";
                        echo "<br>";
                    }
                }
            }
        }
    }

    $a = array();
    $a[1] = 1;
    $a[2] = 6;
    $a[3] = 3;
    $a[4] = 6;

    //4位数的组合
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            if ($i != $j) {
                for ($k = 1; $k <= 4; $k++) {
                    if ($k != $j && $k != $i) {
                        for ($n = 1; $n <= 4; $n++) {
                            if ($n != $j && $n != $i && $n != $k) {
                                allcount($a[$i], $a[$j], $a[$k], $a[$n]);
                            }
                        }
                    }
                }
            }
        }
    }
    echo "<br>";
    echo "<br>";
    echo "4.三位数字的全排列";
    echo "<br>";
    $a = array();
    $a[1] = 2;
    $a[2] = 3;
    $a[3] = 5;
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3; $j++) {
            if ($i != $j) {
                for ($k = 1; $k <= 3; $k++) {
                    if ($k != $j && $k != $i) {
                        echo $a[$i] . $a[$j] . $a[$k] . "";
                        echo "<br>";
                    }
                }
            }
        }
    }
    echo "<br>";
    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>第二次课程作业</title>
</head>

<body>
    <?php
    echo "1.写函数创建长度为10的数组，数组中的元素为递增的奇数，首项为1。";
    echo "<br>";
    function createArray()
    {
        $arr = array();
        for ($i = 0; $i < 10; $i++) {
            $arr[$i] = 2 * $i + 1;
        }
        return $arr;
    }
    $arr = createArray();
    for ($i = 0; $i < 10; $i++) {
        echo $arr[$i] . " ";
    }
    echo "<br>";
    echo "<br>";
    echo "2.求数组中最大数的下标。（函数实现）";
    echo "<br>";
    function maxIndex($arr)
    {
        $max = $arr[0];
        $index = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] > $max) {
                $max = $arr[$i];
                $index = $i;
            }
        }
        return $index;
    }

    echo "最大数下标为：";
    echo maxIndex($arr);
    echo "<br>";
    echo "<br>";
    echo "3.求数组中最大数和最小数的差(sort)";
    echo "<br>";
    function maxMin($arr)
    {
        sort($arr);
        return $arr[count($arr) - 1] - $arr[0];
    }
    echo "数组最大最小差为：";
    echo maxMin($arr);
    echo "<br>";
    echo "<br>";
    echo "4.数组逆序存放";
    echo "<br>";
    function reverse($arr)
    {
        $arr1 = array();
        for ($i = 0; $i < count($arr); $i++) {
            $arr1[$i] = $arr[count($arr) - 1 - $i];
        }
        return $arr1;
    }
    $arr1 = reverse($arr);
    echo "逆序数组为：";
    for ($i = 0; $i < count($arr1); $i++) {
        echo $arr1[$i] . " ";
    }
    echo "<br>";
    echo "<br>";
    ?>
</body>
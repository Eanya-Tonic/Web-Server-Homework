<!DOCTYPE html>

<html>

<head>
    <title>面向对象练习题一</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    echo "1.定义一个汽车这个类,内有两个私有属性：型号、颜色 方法：构造方法（），__toString( )方法，还有__set( )  __get( )方法.";
    echo "<br>";
    class Car
    {
        private $model;
        private $color;
        public function __construct($model, $color)
        {
            $this->model = $model;
            $this->color = $color;
        }
        public function __toString()
        {
            return " 型号：" . $this->model . " 颜色：" . $this->color;
        }
        public function __set($name, $value)
        {
            $this->$name = $value;
        }
        public function __get($name)
        {
            return $this->$name;
        }
    }
    $car = new Car("大众", "白色");
    echo $car;
    echo "<br>";
    $car->model = "三菱";
    $car->color = "蓝色";
    echo $car;
    echo "<br>";
    echo "<br>";
    echo "2.再定义一个公交车类，继承汽车类,内有一个私有属性：共载人数 重写：构造方法（），__toString( )方法";
    echo "<br>";
    class Bus extends Car
    {
        private $num;
        public function __construct($model, $color, $num)
        {
            parent::__construct($model, $color);
            $this->num = $num;
        }
        public function __toString()
        {
            return " 型号：" . $this->model . " 颜色：" . $this->color . " 共载人数：" . $this->num;
        }
    }
    $bus = new Bus("宇通", "黑色", 50);
    echo $bus;
    echo "<br>";
    ?>
</body>

</html>
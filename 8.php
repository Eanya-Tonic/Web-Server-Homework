<!DOCTYPE html>

<html>

<head>
    <title>面向对象练习题二</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    echo "1.定义一个圆这个final类：实现两个静态方法（求周长和面积方法），并测试。";
    echo "<br>";
    final class Circle
    {
        public static function getArea($r)
        {
            return 3.14 * $r * $r;
        }
        public static function getPerimeter($r)
        {
            return 2 * 3.14 * $r;
        }
    }
    echo "半径为8的圆的面积为：" . Circle::getArea(8);
    echo "<br>";
    echo "半径为8的圆的周长为：" . Circle::getPerimeter(8);
    echo "<br>";
    echo "<br>";
    echo "2.定义学生信息类Stu，内容私有属性：学号，姓名、性别、班级。定义一个构造方法，目的实现上面四个属性的初始化赋值操作。定义方法：__set __get  __unset __isset ，并发挥其作用。定义一个获取信息的方法getinfo方法。定义方法：__call( ); 并发挥其作用";
    echo "<br>";
    class Stu
    {
        private $id;
        private $name;
        private $sex;
        private $class;
        public function __construct($id, $name, $sex, $class)
        {
            $this->id = $id;
            $this->name = $name;
            $this->sex = $sex;
            $this->class = $class;
        }
        public function __set($name, $value)
        {
            $this->$name = $value;
        }
        public function __get($name)
        {
            return $this->$name;
        }
        public function __unset($name)
        {
            unset($this->$name);
        }
        public function __isset($name)
        {
            return isset($this->$name);
        }
        public function getinfo()
        {
            echo "学号：" . $this->id . " 姓名：" . $this->name . " 性别：" . $this->sex . " 班级：" . $this->class . "<br>";
        }
        public function __call($name, $arguments)
        {
            echo "调用的方法" . $name . "不存在";
        }
    }
    $stu = new Stu(1, "张三", "男", "一班");
    echo "<br>";
    echo "调用getinfo方法：";
    echo $stu->getinfo();
    echo "调用不存在的方法：";
    echo $stu->getinfo1();
    echo "<br>";
    echo "<br>";
    echo "3.我们设计一个在线销售系统，用户部分设计如下：将用户分为，NormalUser ,VipUser,InnerUser三种。要求根据用户的不同折扣计算用户购买产品的价格。并要求为以后扩展和维护预留空间。用户部分先声明了一个接口User，用户都是User的实现。";
    echo "<br>";
    interface User
    {
        public function getDiscount();
    }
    class NormalUser implements User
    {
        public function getDiscount()
        {
            return 1;
        }
    }
    class VipUser implements User
    {
        public function getDiscount()
        {
            return 0.8;
        }
    }
    class InnerUser implements User
    {
        public function getDiscount()
        {
            return 0.5;
        }
    }
    interface Product
    {
        public function getPrice();
    }
    class Car implements Product
    {
        private $price;
        public function __construct($price)
        {
            $this->price = $price;
        }
        public function getPrice()
        {
            return $this->price;
        }
    }
    class Camera implements Product
    {
        private $price;
        public function __construct($price)
        {
            $this->price = $price;
        }
        public function getPrice()
        {
            return $this->price;
        }
    }
    class Order
    {
        private $user;
        private $product;
        public function __construct(User $user, Product $product)
        {
            $this->user = $user;
            $this->product = $product;
        }
        public function getPrice()
        {
            return $this->product->getPrice() * $this->user->getDiscount();
        }
    }
    echo "普通用户买车：";
    $order = new Order(new NormalUser(), new Car(100000));
    echo $order->getPrice();
    echo "<br>";
    echo "VIP用户买车：";
    $order = new Order(new VipUser(), new Car(100000));
    echo $order->getPrice();
    echo "<br>";
    echo "内部员工买车：";
    $order = new Order(new InnerUser(), new Car(100000));
    echo $order->getPrice();
    echo "<br>";
    echo "普通用户买相机：";
    $order = new Order(new NormalUser(), new Camera(8000));
    echo $order->getPrice();
    echo "<br>";
    echo "VIP用户买相机：";
    $order = new Order(new VipUser(), new Camera(8000));
    echo $order->getPrice();
    echo "<br>";
    echo "内部员工买相机：";
    $order = new Order(new InnerUser(), new Camera(8000));
    echo $order->getPrice();
    echo "<br>";
    ?>
</body>

</html>
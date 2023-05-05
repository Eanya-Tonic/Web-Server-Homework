<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<html>

<head>
    <title>编辑学生信息</title>
    <link rel="stylesheet" href="edit_styles.css">
</head>

<body>
    <h1>编辑学生信息</h1>
    <?php
    if (isset($_POST["submit"])) {
        $student_id = $_POST["student_id"];
        $student_name = $_POST["student_name"];
        $student_age = $_POST["student_age"];
        $student_address = $_POST["student_address"];

        $sql = "UPDATE student_info SET student_name='$student_name', student_age='$student_age', student_address='$student_address' WHERE student_id='$student_id'";
        if ($conn->query($sql) === TRUE) {
            echo "更新信息成功";
            echo   "<br><br>";
            echo "<a href='index.php'>返回学生信息表</a>";
        } else {
            echo "更新信息出错: " . $conn->error;
            echo   "<br><br>";
            echo "<a href='index.php'>返回学生信息表</a>"; 
        }
    } else {
        $id = $_GET["id"];
        $sql = "SELECT * FROM student_info WHERE student_id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    ?>
        <form method="post" action="edit.php">
            <input type="hidden" name="student_id" value="<?php echo $row['student_id']; ?>">
            <label for="student_name">姓名</label>
            <input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name']; ?>"><br><br>
            <label for="student_age">年龄:</label>
            <input type="text" name="student_age" id="student_age" value="<?php echo $row['student_age']; ?>"><br><br>
            <label for="student_address">住址:</label>

            <input type="text" name="student_address" id="student_address" value="<?php echo $row['student_address']; ?>"><br><br>
            <input type="submit" name="submit" value="提交">
            <a href="index.php">取消</a>
        </form>
    <?php
    }
    ?>

</body>

</html>
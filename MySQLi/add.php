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
  <title>添加新的学生</title>
  <link rel="stylesheet" href="add_styles.css">

</head>
<body>
  <h1>添加新的学生</h1>
  <?php
  if (isset($_POST["submit"])) {
    $student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"];
    $student_age = $_POST["student_age"];
    $student_address = $_POST["student_address"];

    $sql = "INSERT INTO student_info (student_id, student_name, student_age, student_address) VALUES ('$student_id', '$student_name', '$student_age', '$student_address')";
    if ($conn->query($sql) === TRUE) {
      echo "新学生添加成功";
      echo   "<br><br>";
      echo "<a href='index.php'>返回学生信息表</a>";
    } else {
      echo "添加学生时出错: " . $conn->error;
      echo   "<br><br>";
      echo "<a href='index.php'>返回学生信息表</a>";
    }
  } else {
    ?>
    <form method="post" action="add.php">
      <label for="student_id">学号:</label>
      <input type="text" name="student_id" id="student_id"><br><br>
      <label for="student_name">姓名:</label>
      <input type="text" name="student_name" id="student_name"><br><br>
      <label for="student_age">年龄:</label>
      <input type="text" name="student_age" id="student_age"><br><br>
      <label for="student_address">住址:</label>
      <input type="text" name="student_address" id="student_address"><br><br>
      <input type="submit" name="submit" value="添加">
      <a href="index.php">取消</a>
    </form>
    <?php
  }
  ?>
</body>
</html>

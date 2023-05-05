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
  <title>Delete Student</title>
</head>
<body>
  <?php
  $id = $_GET["id"];
  $sql = "DELETE FROM student_info WHERE student_id='$id'";
  if ($conn->query($sql) === TRUE) {
    echo "删除成功";
  } else {
    echo "删除信息时出错: " . $conn->error;
  }
  ?>
  <br><br>
  <a href="index.php">返回学生信息表</a>
</body>
</html>

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
  <title>学生信息表</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>学生信息表</h1>
  <form method="post" action="index.php">
    <label for="search">搜索学生:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="搜索">
  </form>
  <table border="1">
    <tr>
      <th>学号</th>
      <th>姓名</th>
      <th>年龄</th>
      <th>住址</th>
      <th>操作</th>
    </tr>
    <?php
    $sql = "SELECT * FROM student_info";
    if (isset($_POST["search"]) && !empty($_POST["search"])) {
      $search = $_POST["search"];
      $sql .= " WHERE student_name LIKE '%$search%' OR student_address LIKE '%$search%'";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["student_name"] . "</td>";
        echo "<td>" . $row["student_age"] . "</td>";
        echo "<td>" . $row["student_address"] . "</td>";
        echo "<td><a class = 'edit-btn' href='edit.php?id=" . $row["student_id"] . "'>编辑</a> | <a class = 'delete-btn' href='delete.php?id=" . $row["student_id"] . "' >删除</a></td>";
        echo "</tr>";
        }
        } else {
        echo "<tr><td colspan='5'>未找到结果</td></tr>";
        }
        ?>
        
          </table>
          <br>
          <div class = "add-btn-div">
          <a class = "add-btn" href="add.php">添加新的学生</a>
          </div>
          <br><br>
          <form method="post" action="index.php">
            <input type="submit" name="count" value="当前学生总人数">
            <?php
            if (isset($_POST["count"])) {
              $sql = "SELECT COUNT(*) AS total FROM student_info";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              echo "<br><br>当前有学生数: " . $row["total"];
            }
            ?>
          </form>
        </body>
        </html>

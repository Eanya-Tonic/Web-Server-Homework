<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取当前页码
$page = $_GET['page'];

// 每页显示的记录数
$page_size = 10;

// 计算起始记录
$start = ($page - 1) * $page_size;

// 查询数据
$sql = "SELECT * FROM dg_taobao LIMIT $start, $page_size";
$result = $conn->query($sql);

// 将查询结果转换为数组
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// 返回JSON格式的数据
header('Content-Type:application/json');
echo json_encode($data);

// 关闭连接
$conn->close();
?>

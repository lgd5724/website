<?php 
$name = $email = $comment = $gender="";
$name =  $_POST["name"];
$email = $_POST["qq"]; 
$comment =  $_POST["person"];
$gender = $_POST["gender"];
 ?> 
 <?php
$servername = "localhost:3306";
$username = "root";
$password = "123456";
$dbname = "mydb";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
mysqli_set_charset($conn,'utf8');
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "报名成功";

$sql = "INSERT INTO registry (姓名,qq,个人经历,性别) VALUES('$name','$email','$comment', '$gender')";
if($conn->query($sql)===TRUE)
{
    
} else{
    echo "Error：".$sql."<br>".$conn->error;
}
$name = $email = $gender = $comment = $website = "";
$conn->close();
?>
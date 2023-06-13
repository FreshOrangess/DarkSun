<?php
$conn = new mysqli('mg.707077.xyz','s2866525', 'uiXT12mtIA');
$sql = "use s2866525";
$result = mysqli_query($conn,$sql);
$sql = "set names utf8";
$result = mysqli_query($conn,$sql);
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$sql = "SELECT * FROM grades Where 姓名='$name1'";
$result = mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()) {
    echo "\t姓名:".$row['姓名']."\t赋分总分:".$row['赋分总分']."\t原始分总分:".$row['原始分总分']."\t数学:".$row['数学']."\t语文:".$row['语文']."\t英语:".$row['英语']."\t物理:".$row['物理']."\t生物原始分:".$row['生物原始分']."\t生物赋分成绩:".$row['生物赋分成绩']."\t化学原始分:".$row['化学原始分']."\t化学赋分成绩:".$row['化学赋分成绩'].'<br>';
}
$sql = "SELECT * FROM grades Where 姓名='$name2'";
$result = mysqli_query($conn,$sql);
while($row = $result->fetch_assoc()) {
    echo "\t姓名:".$row['姓名']."\t赋分总分:".$row['赋分总分']."\t原始分总分:".$row['原始分总分']."\t数学:".$row['数学']."\t语文:".$row['语文']."\t英语:".$row['英语']."\t物理:".$row['物理']."\t生物原始分:".$row['生物原始分']."\t生物赋分成绩:".$row['生物赋分成绩']."\t化学原始分:".$row['化学原始分']."\t化学赋分成绩:".$row['化学赋分成绩'].'<br>';
}
?>
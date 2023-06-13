<?php
    $grade = $_GET['grade'];
    $province = $_GET['province'];
    $conn = new mysqli('sql.wsfdb.cn','FreshOrangesschool', 'lihan197827');
    $sql = "USE freshorangesschool";
    $result = mysqli_query($conn,$sql);
    $sql = "set names utf8";
    $result = mysqli_query($conn,$sql);
    $sql = "SELECT 学校名称 FROM school_info WHERE ".$provinces[$province]." > ".$grade."+10 ORDER BY ".$provinces[$province]." DESC";
    $result = mysqli_query($conn,$sql);
    while ($row = $result->fetch_assoc()) {
        echo $row['学校名称'];
    }
?>
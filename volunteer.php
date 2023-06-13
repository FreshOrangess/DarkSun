<?php
    $grade = $_GET['grade'];
    $province = $_GET['province'];
    $conn = new mysqli('sql.wsfdb.cn','FreshOrangesschool', 'lihan197827');
    $sql = "USE freshorangesschool";
    $result = mysqli_query($conn,$sql);
    $sql = "set names utf8";
    $result = mysqli_query($conn,$sql);
    $schools = array('chabuduo'=>array(),'youdianxuan'=>array(),'kaobushang'=>array());
    $provinces = array(
        11 => '北京',
        12 => '天津',
        13 => '河北',
        14 => '山西',
        15 => '内蒙古',
        21 => '辽宁',
        22 => '吉林',
        23 => '黑龙江',
        31 => '上海',
        32 => '江苏',
        33 => '浙江',
        34 => '安徽',
        35 => '福建',
        36 => '江西',
        37 => '山东',
        41 => '河南',
        42 => '湖北',
        43 => '湖南',
        44 => '广东',
        45 => '广西',
        46 => '海南',
        50 => '重庆',
        51 => '四川',
        52 => '贵州',
        53 => '云南',
        61 => '陕西',
        62 => '甘肃',
        63 => '青海',
        64 => '宁夏',
        65 => '新疆',
        54 => '西藏',
    );
    $sql = "SELECT 学校名称,学校ID FROM school_info WHERE ".$provinces[$province]." <= ".$grade." ORDER BY ".$provinces[$province]." DESC";
    $result = mysqli_query($conn,$sql);
    while ($row = $result->fetch_assoc()) {
        $schools['chabuduo'][] = $row['学校名称'].$row['学校ID'];
    }
    $sql = "SELECT 学校名称,学校ID FROM school_info WHERE ".$provinces[$province].' <= '.$grade."+10 AND ".$grade." < ".$provinces[$province]." ORDER BY ".$provinces[$province]." DESC";
    $result = mysqli_query($conn,$sql);
    while ($row = $result->fetch_assoc()) {
        $schools['youdianxuan'][] = $row['学校名称'].$row['学校ID'];
    }
    $sql = "SELECT 学校名称,学校ID FROM school_info WHERE ".$provinces[$province]." > ".$grade."+10 ORDER BY ".$provinces[$province]." DESC";
    $result = mysqli_query($conn,$sql);
    while ($row = $result->fetch_assoc()) {
        $schools['kaobushang'][] = $row['学校名称'].$row['学校ID'];
    }
    echo json_encode($schools);
?>